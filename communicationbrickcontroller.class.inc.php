<?php

// Copyright (C) 2010-2015 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Portal\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Combodo\iTop\Portal\Controller\BrickController;
use Combodo\iTop\Portal\Helper\ApplicationHelper;
use DBObjectSearch;
use DBObjectSet;
use UserRights;
use AttributeDateTime;

class CommunicationController extends BrickController
{
	public function RenderTileAction(Request $oRequest, Application $oApp, $sBrickId)
	{
		$oBrick = ApplicationHelper::GetLoadedBrickFromId($oApp, $sBrickId);
		$aData = array(
			'brick' => $oBrick
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
		return $oApp['twig']->render($oBrick->GetTileTemplatePath(), $aData);
	}

}

