<?php

use Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory;
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
		$oMainBlock = UIContentBlockUIBlockFactory::MakeStandard();
		$sNowSQL = date((string)AttributeDateTime::GetSQLFormat());
		$oSearch = DBObjectSearch::FromOQL('SELECT Communication');
		$oSearch->AllowAllData();
		$oSet = new DBObjectSet($oSearch, array('start_date' => true), array('now' => $sNowSQL));
		$iCount = 0;
		while ($oComm = $oSet->Fetch())
		{
			$oComm->Reload(true /* allow all data */); // Make sure that all the fields are loaded
			if ($oComm->IsUserInScope(UserRights::GetUserObject()) && $oComm->IsAllowedPortalsValid())
			{
				$sTitle = $oComm->Get('title');
				$sContent = $oComm->Get('message');
				$oAlertBlock = AlertUIBlockFactory::MakeForInformation($sTitle, $sContent, 'ibo-communication-'.$oComm->GetKey())
					->EnableSaveCollapsibleState('ibo-communication-'.$oComm->GetKey())
					->SetColor($oComm->GetColorFromIcon());
				$oMainBlock->AddSubBlock($oAlertBlock);
			}
		}
		return $oMainBlock;
	}

	public function GetFooterBlock()
	{
		// TODO: Implement GetFooterBlock() method.
	}
}
}