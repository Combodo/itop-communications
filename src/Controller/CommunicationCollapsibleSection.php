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

namespace Combodo\iTop\Application\UI\Base\Component\CollapsibleSection;


use Combodo\iTop\Application\UI\Base\tUIContentAreas;

/**
 * Similar to CollapsibleSection but without white and padded body
 * @package Combodo\iTop\Application\UI\Base\Component\CollapsibleSection
 */
class CommunicationCollapsibleSection extends CollapsibleSection
{
	use tUIContentAreas;

	// Overloaded constants
	public const DEFAULT_HTML_TEMPLATE_REL_PATH = 'itop-communications/view/CommunicationCollapisbleSection/layout';
	public const DEFAULT_CSS_TEMPLATE_REL_PATH = 'itop-communications/view/CommunicationCollapisbleSection/layout';
	public const DEFAULT_JS_ON_READY_TEMPLATE_REL_PATH = 'itop-communications/view/CommunicationCollapisbleSection/layout';
	
	public const REQUIRES_ANCESTORS_DEFAULT_JS_FILES = 'true';
}