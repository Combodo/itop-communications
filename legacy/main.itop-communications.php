<?php

// PHP Data Model definition file

// WARNING - WARNING - WARNING
// DO NOT EDIT THIS FILE (unless you know what you are doing)
//
// If you use supply a datamodel.xxxx.xml file with your module
// the this file WILL BE overwritten by the compilation of the
// module (during the setup) if the datamodel.xxxx.xml file
// contains the definition of new classes or menus.
//
// The recommended way to define new classes (for iTop 2.0) is via the XML definition.
// This file remains in the module's template only for the cases where there is:
// - either no new class or menu defined in the XML file
// - or no XML file at all supplied by the module

class AutoCloseCommunication implements iBackgroundProcess
{
	public function GetPeriodicity()
	{	
		return 60; // Once a day
	}

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


?>