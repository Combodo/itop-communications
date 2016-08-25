<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-communications/1.0.5',
	array(
		// Identification
		//
		'label' => 'Communications to the Customers',
		'category' => 'portal',

		// Setup
		//
		'dependencies' => array(
			'itop-portal-base/1.0.1',
			'itop-service-mgmt/2.3.0||itop-service-mgmt-provider/2.3.0', // because of the menu
		),
		'mandatory' => false,
		'visible' => true,
		//'auto_select' => 'SetupInfo::ModuleIsSelected("itop-portal")',

		// Components
		//
		'datamodel' => array(
			'communicationbrick.class.inc.php',
			'communicationbrickcontroller.class.inc.php',
			'model.itop-communications.php',
			'main.itop-communications.php',
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
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


?>
