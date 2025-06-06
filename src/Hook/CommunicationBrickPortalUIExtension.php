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

use Combodo\iTop\Portal\Brick\CommunicationBrick;
use Symfony\Component\DependencyInjection\Container;

/**
 * Class CommunicationBrickPortalUIExtension
 */
class CommunicationBrickPortalUIExtension extends AbstractPortalUIExtension
{
	const MODULE_CODE = 'itop-communications';

	private string $sModuleVersion;
	private string $sURLBase;

	public function __construct()
	{
		$this->sModuleVersion = utils::GetCompiledModuleVersion(static::MODULE_CODE);
		$this->sURLBase = utils::GetAbsoluteUrlModulesRoot() . '/' . static::MODULE_CODE . '/';
	}

	/**
	 * @inheritdoc
	 * @throws \Exception
	 */
	public function GetCSSFiles(Container $oContainer)
	{

		$aReturn = [];

		if(CommunicationBrick::HasV3Look())
		{
			$aReturn[] = $this->sURLBase.'asset/css/communication-brick-v3.css?v='.$this->sModuleVersion;
		}
		else{
			$aReturn[] = $this->sURLBase.'asset/css/communication-brick.css?v='.$this->sModuleVersion;
		};

		return $aReturn;
	}

	public function GetJSFiles(Container $oContainer)
	{
		$aReturn = [];

		if(CommunicationBrick::HasV3Look())
		{
			$aReturn[] = $this->sURLBase.'asset/js/custom_elements/carousel_tile_element.js?v='.$this->sModuleVersion;
		}

		return $aReturn;
	}
}