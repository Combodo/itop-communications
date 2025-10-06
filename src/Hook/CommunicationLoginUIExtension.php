<?php
/**
 * @copyright   Copyright (C) 2010-2024 Combodo SAS
 * @license     https://www.combodo.com/documentation/combodo-software-license.html
 *
 */


/**
 * Class CommunicationLoginUiExtension
 */
class CommunicationLoginUiExtension implements iLoginUIExtension
{

	/**
	 * Return the list of supported login modes for this plugin
	 *
	 * @return array of supported login modes
	 */
	public function ListSupportedLoginModes()
	{
		return array('form');
	}

	public function GetTwigContext()
	{
		$oLoginContext = new LoginTwigContext();
		$sOQLCommunicationOnLogin ='SELECT Communication WHERE status != \'closed\' AND start_date <= :now';
		// Override the default OQL with the one defined in the module settings
		$aDisplayFilters = MetaModel::GetModuleSetting('itop-communications', 'display_filter', []);
		if (array_key_exists('login', $aDisplayFilters) && $aDisplayFilters['login'] != '') {
			$sOQLCommunicationOnLogin = $aDisplayFilters['login'];
		}

		$oSearch = DBObjectSearch::FromOQL($sOQLCommunicationOnLogin);
		$oSearch->AllowAllData();
		$sNowSQL = date((string)AttributeDateTime::GetSQLFormat());
		$oSet = new DBObjectSet($oSearch, [], ['now' => $sNowSQL]);
		$aData = array();
		while ($oComm = $oSet->Fetch())
		{
			$oComm->Reload(true /* allow all data */); // Make sure that all the fields are loaded
			if ($oComm->IsAllowedPortalsValid('Login'))
			{
				$aComm = [];
				$aComm['id'] = $oComm->GetKey();
				$aComm['title'] = $oComm->Get('title');
				$aComm['message'] = $oComm->GetAsHTML('message');
				$aComm['severity'] = $oComm->Get('icon');
				$aData[] = $aComm;
			}
		}

		$oLoginContext->SetLoaderPath(utils::GetAbsoluteModulePath('itop-communications').'view/Login');
		$oLoginContext->AddBlockExtension('login_header', new LoginBlockExtension('login_header.html.twig', $aData));
		$oLoginContext->AddBlockExtension('css', new LoginBlockExtension('login_header.css.twig'));
		$oLoginContext->AddBlockExtension('ready_script', new LoginBlockExtension('login_header.js.twig'));
		return $oLoginContext;
	}
}
