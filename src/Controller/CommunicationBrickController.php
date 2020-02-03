<?php

/**
 * Copyright (C) 2013-2020 Combodo SARL
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
use DBObjectSearch;
use DBObjectSet;
use Symfony\Component\HttpFoundation\Request;
use UserRights;

/**
 * Class CommunicationController
 *
 * @package Combodo\iTop\Portal\Controller
 */
class CommunicationController extends BrickController
{
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
		$oBrickCollection = $this->get('brick_collection');

		/** @var \Combodo\iTop\Portal\Brick\CommunicationBrick $oBrick */
		$oBrick = $oBrickCollection->GetBrickById($sBrickId);

		$aData = array(
			'brick' => $oBrick,
		);

		$sNowSQL = date((string)AttributeDateTime::GetSQLFormat());
		$oSearch = DBObjectSearch::FromOQL($oBrick->GetOql());
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, array('start_date' => true), array('now' => $sNowSQL));
		$iCount = 0;
		while ($oComm = $oSet->Fetch())
		{
			$oComm->Reload(true /* allow all data */); // Make sure that all the fields are loaded
			if ($oComm->IsUserInScope(UserRights::GetUserObject()))
			{
				$aData['messages'][] = $oComm;
				$iCount++;
			}
		}
		$aData['message_count'] = $iCount;

		return $this->render($oBrick->GetTileTemplatePath(), $aData);
	}

}

