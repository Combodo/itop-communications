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

namespace Combodo\iTop\Portal\Brick;

use Combodo\iTop\DesignElement;
use Combodo\iTop\Portal\Service\TemplatesProvider\TemplateDefinitionDto;
use Combodo\iTop\Portal\Service\TemplatesProvider\TemplatesRegister;
use Combodo\iTop\Portal\Service\TemplatesProvider\TemplatesService;

/**
 * Description of CommunicationBrick
 * 
 * @author Guillaume Lajarige
 */
class CommunicationBrick extends PortalBrick
{
	const DEFAULT_SCOPE = "SELECT Communication WHERE status != 'closed' AND start_date <= :now";

	const DEFAULT_HEIGHT = "12";
	const DEFAULT_VISIBLE_NAVIGATION_MENU = false;
	const DEFAULT_TILE_TEMPLATE_PATH = 'itop-communications/view/tile.html.twig';
	const DEFAULT_TILE_CONTROLLER_ACTION = 'Combodo\\iTop\\Portal\\Controller\\CommunicationBrickController::RenderTileAction';

	protected $sOql;
	protected $iHeightEm;

	public static function RegisterTemplates(TemplatesRegister $oTemplatesRegister): void
	{
		parent::RegisterTemplates($oTemplatesRegister);
		$oTemplatesRegister->RegisterTemplates(self::class,
			TemplateDefinitionDto::Create('tile',
				$oTemplatesRegister->GetUIVersion() === 'v3' ?
					'itop-communications/view/tile_v3.html.twig' : 'itop-communications/view/tile.html.twig')
		);
	}

	public static function HasV3Look(): bool
	{
		if (class_exists('Combodo\iTop\Portal\Service\TemplatesProvider\TemplatesProviderService'))
		{
			return self::GetTemplatesProviderService()->GetRegister()->GetUIVersion() === 'v3';
		}

		return false;
	}

	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
		parent::__construct();

		$this->sOql = static::DEFAULT_SCOPE;
		$this->iHeightEm = static::DEFAULT_HEIGHT;
	}


	/**
	 * @inheritDoc
	 */
	public function LoadFromXml(DesignElement $oMDElement)
	{
		parent::LoadFromXml($oMDElement);

		// Checking specific elements
		foreach ($oMDElement->GetNodes('./*') as $oBrickSubNode)
		{
			switch ($oBrickSubNode->nodeName)
			{
				case 'oql':
					$this->SetOql($oBrickSubNode->GetText(static::DEFAULT_SCOPE));
					break;
				case 'height':
					$this->SetHeight($oBrickSubNode->GetText(static::DEFAULT_HEIGHT));
					break;
			}
		}

		return $this;
	}

	public function SetOql($sOql)
	{
		$this->sOql = $sOql;
	}
	public function GetOql()
	{
		return $this->sOql;
	}

	/**
	 * @inheritDoc
	 */
	public function SetHeight($iHeightEm)
	{
		$this->iHeightEm = $iHeightEm;
	}

	/**
	 * @inheritDoc
	 */
	public function GetHeight()
	{
		return $this->iHeightEm;
	}
}
