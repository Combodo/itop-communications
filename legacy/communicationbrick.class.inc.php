<?php

// Copyright (C) 2010-2015 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Portal\Brick;

use \Combodo\iTop\Portal\Brick\PortalBrick;
use Combodo\iTop\DesignElement;

/**
 * Description of CommunicationBrick
 * 
 * @author Guillaume Lajarige
 */
class CommunicationBrick extends PortalBrick
{
	const DEFAULT_VISIBLE_NAVIGATION_MENU = false;
	const DEFAULT_SCOPE = "SELECT Communication WHERE status != 'closed' AND start_date <= :now";
	const DEFAULT_HEIGHT = "15";

	protected $sOql;
	protected $iHeightEm;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();

		$this->sOql = static::DEFAULT_SCOPE;
		$this->iHeightEm = static::DEFAULT_HEIGHT;
	}


	/**
	 * Load the brick's data from the xml passed as a ModuleDesignElement.
	 * This is used to set all the brick attributes at once.
	 *
	 * @param \Combodo\iTop\DesignElement $oMDElement
	 * @return CreateBrick
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
	public function SetHeight($iHeightEm)
	{
		$this->iHeightEm = $iHeightEm;
	}
	public function GetHeight()
	{
		return $this->iHeightEm;
	}
}
