<?php

use Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory;
use Combodo\iTop\Application\UI\Base\Component\CollapsibleSection\CollapsibleSectionUIBlockFactory;
use Combodo\iTop\Application\UI\Base\Component\CollapsibleSection\CommunicationCollapsibleSection;
use Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory;

if (interface_exists('iPageUIBlockExtension')) {
/**
* Class KanbanUiBlockExtension
*
* @since 3.0.0
*
* Used to loaded resources necessary for kanban display and edition (dashboard editor)
*/
class CommunicationPageUIBlockExtension implements iPageUIBlockExtension
{

	public function GetBannerBlock()
	{
		// TODO: Implement GetBannerBlock() method.
	}

	public function GetHeaderBlock()
	{
		$sExecModule = utils::ReadParam('exec_module', '');
		// We don't want to display in itop-config modules, especially config editor
		if($sExecModule === 'itop-config') {
			return;
		}

		$oMainBlock = new CommunicationCollapsibleSection(Dict::S('itop-communications:Communications:Section:Title'),[] ,  'com-wrapper-communications');
		$sNowSQL = date((string)AttributeDateTime::GetSQLFormat());
		$sOQLCommunicationOnConsole ='SELECT Communication WHERE status != \'closed\' AND start_date <= :now';
		// Override the default OQL with the one defined in the module settings
		$aDisplayFilters = MetaModel::GetModuleSetting('itop-communications', 'display_filter', []);
		if (array_key_exists('backoffice', $aDisplayFilters) && $aDisplayFilters['backoffice'] != '') {
			$sOQLCommunicationOnConsole = $aDisplayFilters['backoffice'];
		}
		$oSearch = DBObjectSearch::FromOQL($sOQLCommunicationOnConsole);
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, [], ['now' => $sNowSQL]);
		$iCount = 0;
		$bOpenedByDefault = false;
		while ($oComm = $oSet->Fetch())
		{
			$oComm->Reload(true /* allow all data */); // Make sure that all the fields are loaded
			if ($oComm->IsUserInScope(UserRights::GetUserObject()) && $oComm->IsAllowedPortalsValid())
			{
				$iCount++;
				$sTitle = MetaModel::ApplyParams($oComm->Get('title'), []);
				$sContent = MetaModel::ApplyParams($oComm->GetAsHTML('message'), []);
				$oAlertBlock = AlertUIBlockFactory::MakeForInformation($sTitle, $sContent, 'ibo-communication-'.$oComm->GetKey())
					->EnableSaveCollapsibleState('ibo-communication-'.$oComm->GetKey())
					->SetColor($oComm->GetColorFromIcon())
					->SetIsClosable(false);
				$bOpenedByDefault = $bOpenedByDefault || appUserPreferences::GetPref('UI-Collapsible__ibo-communication-'.$oComm->GetKey(), "true") === "true";
				$oMainBlock->AddSubBlock($oAlertBlock);
			}
		}
		if($iCount > 0){
			$oMainBlock->SetOpenedByDefault($bOpenedByDefault);
			return $oMainBlock;
		}
	}

	public function GetFooterBlock()
	{
		// TODO: Implement GetFooterBlock() method.
	}
}
}