<?php

/**
 * Copyright (C) 2013-2024 Combodo SAS
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

namespace Combodo\iTop\Portal\Controller;

use AttributeDateTime;
use Combodo\iTop\Portal\Brick\BrickCollection;
use DBObjectSearch;
use DBObjectSet;
use MetaModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Service\Attribute\Required;
use UserRights;

/**
 * Class CommunicationController
 *
 * @package Combodo\iTop\Portal\Controller
 */
class CommunicationBrickController extends BrickController
{
	/** @see N°6986 - Symfony 6.4 - Remove deprecated calls - communication */
	private $oBrickCollection;
	#[Required]
	public function SetBrickCollection(BrickCollection $oBrickCollection): void
	{
		$this->oBrickCollection = $oBrickCollection;
	}

	/**
	 * @param \Symfony\Component\HttpFoundation\Request $oRequest
	 * @param                                           $sBrickId
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \Combodo\iTop\Portal\Brick\BrickNotFoundException
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \MySQLException
	 * @throws \OQLException
	 */
	public function RenderTileAction(Request $oRequest, $sBrickId)
	{
		/** @var \Combodo\iTop\Portal\Brick\BrickCollection $oBrickCollection */
		$oBrickCollection = $this->oBrickCollection ?? $this->get('brick_collection');

		/** @var \Combodo\iTop\Portal\Brick\CommunicationBrick $oBrick */
		$oBrick = $oBrickCollection->GetBrickById($sBrickId);

		$aData = [
			'brick' => $oBrick,
		];

		$sNowSQL = date((string)AttributeDateTime::GetSQLFormat());
		$oSearch = DBObjectSearch::FromOQL($oBrick->GetOql());
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, [], ['now' => $sNowSQL]);
		$iCount = 0;
		while ($oComm = $oSet->Fetch())
		{
			$oComm->Reload(true /* allow all data */); // Make sure that all the fields are loaded
			if ($oComm->IsUserInScope(UserRights::GetUserObject()) && $oComm->IsAllowedPortalsValid())
			{
				$aData['messages'][] = $oComm;
				$iCount++;
			}
		}
		$aData['message_count'] = $iCount;

		$aContext = MetaModel::AddMagicPlaceholders([]);
		// set title and icon for the tile with the first message
		if ($iCount > 0)
		{
			$oBrick->SetTitleHome(MetaModel::ApplyParams($aData['messages'][0]->Get('title'), $aContext));
			$oBrick->SetDecorationClassHome($aData['messages'][0]->GetFontAwesomeIcon());
		}

		return $iCount > 0 ? $this->render($oBrick->GetTemplatePath('tile'), $aData) : new Response();
	}

}

