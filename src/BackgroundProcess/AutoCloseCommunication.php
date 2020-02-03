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

class AutoCloseCommunication implements iBackgroundProcess
{
	/**
	 * @inheritDoc
	 */
	public function GetPeriodicity()
	{	
		return 60; // Once a day
	}

	/**
	 * @inheritDoc
	 *
	 * @throws \ArchivedObjectException
	 * @throws \CoreCannotSaveObjectException
	 * @throws \CoreException
	 * @throws \CoreUnexpectedValue
	 * @throws \MySQLException
	 * @throws \OQLException
	 */
	public function Process($iTimeLimit)
	{

      		$aReport = array();
		if (MetaModel::IsValidClass('Communication'))
		{
			// Get communication to be closed automatically according to defined end_date
			$oSetCommunication = new DBObjectSet(DBObjectSearch::FromOQL("SELECT Communication WHERE status = 'ongoing' AND end_date <= NOW()"));
			while ((time() < $iTimeLimit) && $oToClose = $oSetCommunication->Fetch())
			{
				$oToClose->ApplyStimulus('ev_close');
				$oToClose->DBUpdate();
				$aReport['Communication to close'][] = $oToClose->Get('ref');
			}
		}
	

		$aStringReport = array();
		foreach ($aReport as $sOperation => $aCommunicationRefs)
		{
			if (count($aCommunicationRefs) > 0)
			{
				$aStringReport[] = $sOperation.': '.count($aCommunicationRefs).' {'.implode(', ', $aCommunicationRefs).'}';
			}
		}
		if (count($aStringReport) == 0)
		{
			return "No communication to process";
			echo "No communication to process";
		}
		else
		{

			return "Some communications were closed - ".implode('; ', $aStringReport);
			echo "Some communications were closed - ".implode('; ', $aStringReport);

		}
	}
}
