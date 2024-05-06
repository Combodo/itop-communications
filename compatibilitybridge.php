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

// IMPORTANT: This is a temporary compatibility bridge to enable a smooth migration from iTop 2.6- to iTop 2.7+.
// In the next version of the extension, this will be remove and the require_once from the 2.7 will be moved to the 'datamodel' section of the module.itop-communications.php file.

// iTop 2.7 and newer
if(file_exists(APPROOT . 'env-' . utils::GetCurrentEnvironment() . '/itop-portal-base/portal/vendor/autoload.php'))
{
    // Explicitly load classes for APIs
    require_once __DIR__ . '/src/BackgroundProcess/AutoCloseCommunication.php';
    require_once __DIR__ . '/src/Hook/CommunicationBrickPortalUIExtension.php';
	require_once __DIR__ . '/src/Hook/CommunicationPageUIBlockExtension.php';
	require_once __DIR__ . '/src/Hook/CommunicationLoginUIExtension.php';
	require_once __DIR__ . '/src/Controller/CommunicationCollapsibleSection.php';
    // Autoloader for module classes
    require_once __DIR__ . '/vendor/autoload.php';
    // Must be explicitly loaded to register its routes
    require_once __DIR__ . '/src/Router/CommunicationBrickRouter.php';
}
// iTop 2.6 and older
else
{
	// Communication brick classes
	require_once __DIR__ . '/legacy/communicationbrick.class.inc.php';
	require_once __DIR__ . '/legacy/communicationbrickcontroller.class.inc.php';
	// Background process
	require_once __DIR__ . '/legacy/main.itop-communications.php';
	// APIs
	require_once __DIR__ . '/legacy/communicationbrickportaluiextension.class.inc.php';
}