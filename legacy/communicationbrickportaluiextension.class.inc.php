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

use Silex\Application;

/**
 * Class CommunicationBrickPortalUIExtension
 */
class CommunicationBrickPortalUIExtension extends AbstractPortalUIExtension
{
	const MODULE_CODE = 'itop-communications';

	/**
	 * @inheritdoc
	 * @throws \Exception
	 */
	public function GetCSSFiles(Application $oApp)
	{
		$sModuleVersion = utils::GetCompiledModuleVersion(static::MODULE_CODE);
		$sURLBase = utils::GetAbsoluteUrlModulesRoot() . '/' . static::MODULE_CODE . '/';

		$aReturn = array(
			$sURLBase . 'asset/css/communication-brick.css?v=' . $sModuleVersion,
		);

		return $aReturn;
	}
}