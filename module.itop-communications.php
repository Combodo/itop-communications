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

//
// iTop module definition file
//

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-communications/1.3.5',
	array(
		// Identification
		//
		'label' => 'Communications to the Customers',
		'category' => 'portal',

		// Setup
		//
		'dependencies' => array(
			'itop-portal-base/3.0.0',
			'itop-service-mgmt/3.0.0||itop-service-mgmt-provider/3.0.0', // because of the menu
		),
		'mandatory' => false,
		'visible' => true,
		//'auto_select' => 'SetupInfo::ModuleIsSelected("itop-portal")',

		// Components
		//
		'datamodel' => array(
			// Explicitly load classes for APIs
			'/src/BackgroundProcess/AutoCloseCommunication.php',
			'/src/Hook/CommunicationBrickPortalUIExtension.php',
			'/src/Hook/CommunicationPageUIBlockExtension.php',
			'/src/Hook/CommunicationLoginUIExtension.php',
			'/src/Controller/CommunicationCollapsibleSection.php',
			// Autoloader for module classes
			'/vendor/autoload.php',
			// Must be explicitly loaded to register its routes
			'/src/Router/CommunicationBrickRouter.php',
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		'installer' => 'CommunicationsInstaller',
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);

class CommunicationsInstaller extends ModuleInstallerAPI
{
	/**
	 * Handler called after the creation/update of the database schema
	 * @param $oConfiguration Config The new configuration of the application
	 * @param $sPreviousVersion string PRevious version number of the module (empty string in case of first install)
	 * @param $sCurrentVersion string Current version number of the module
	 */
	public static function AfterDatabaseCreation(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
	{
		if (version_compare($sPreviousVersion, '1.3.0', '<'))
		{
			$oDBSearch = DBSearch::FromOQL('SELECT Communication WHERE allowed_portals=""');
			$oDBObjectSet = new DBObjectSet($oDBSearch);
			while($oCommunications = $oDBObjectSet->Fetch()){
				$oCommunications->Set('allowed_portals', ContextTag::TAG_PORTAL);
				$oCommunications->DBWrite();
			}

			SetupLog::Info("Updated Communications with default allowed portals.");
		}
	}
}