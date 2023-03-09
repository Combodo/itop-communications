<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
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
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

//
// Class: Communication
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Communication' => 'Communication',
	'Class:Communication+' => '',
	'Class:Communication/Attribute:ref' => 'Ref',
	'Class:Communication/Attribute:ref+' => '',
	'Class:Communication/Attribute:start_date' => 'Start date',
	'Class:Communication/Attribute:start_date+' => '',
	'Class:Communication/Attribute:end_date' => 'End date',
	'Class:Communication/Attribute:end_date+' => '',
	'Class:Communication/Attribute:status' => 'Status',
	'Class:Communication/Attribute:status+' => '',
	'Class:Communication/Attribute:status/Value:ongoing' => 'Ongoing',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'Closed',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Announcer',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Announcer name',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:icon' => 'Icon',
	'Class:Communication/Attribute:icon+' => '',
	'Class:Communication/Attribute:icon/Value:none' => 'None',
	'Class:Communication/Attribute:icon/Value:none+' => '',
	'Class:Communication/Attribute:icon/Value:information' => 'Information',
	'Class:Communication/Attribute:icon/Value:information+' => '',
	'Class:Communication/Attribute:icon/Value:warning' => 'Warning',
	'Class:Communication/Attribute:icon/Value:warning+' => '',
	'Class:Communication/Attribute:icon/Value:tip' => 'Tip',
	'Class:Communication/Attribute:icon/Value:tip+' => '',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Breaking news',
	'Class:Communication/Attribute:icon/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Title',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Message',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Close this communication',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Stimulus:ev_reopen' => 'Reopen this communication',
	'Class:Communication/Stimulus:ev_reopen+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Chosen organizations',
	'Class:Communication/Attribute:organizations_list+' => 'When no organization is selected, the communication is displayed to everybody.',
	'Class:Communication/Attribute:org_match_type' => 'Target organizations...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Only the chosen ones',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => 'Static list of chosen organizations',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Cascade to child organizations',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => 'Chosen organizations as well as any of their sub-organizations in cascade',
    'Class:Communication/Attribute:org_match_type/Value:oql' => 'Organizations from OQL',
    'Class:Communication/Attribute:org_match_type/Value:oql+' => 'Organizations returned by the Organizations OQL query',
    'Class:Communication/Attribute:org_oql' => 'Organizations OQL',
    'Class:Communication/Attribute:org_oql+' => 'This OQL must return Organizations only. 
Set it if "Target organizations" specifies to use the OQL',
	'Class:Communication/Attribute:allowed_portals' => 'Allowed portals',
	'Class:Communication/Attribute:allowed_portals+' => '',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'End date must be greater than start date.',
    'Class:Communication/Error:OQLMustBeProvided' => 'An OQL must be provided, as you requested the organizations to be retrieved by OQL',
    'Class:Communication/Error:OQLMustReturnOrganization' => 'The "Organizations OQL" query must return Organizations only',
    'Class:Communication/Error:OQLNotValid' => 'The "Organizations OQL" query is invalid: %1$s',
    'Class:Communication/Warning:OQLProvidedButUnused' => 'An "Organizations OQL" query was provided, but won\'t be used as "Target organizations" is not set to "Organizations from OQL"',
    'Class:Communication/Warning:NoOrgSoAll' => 'No Organizations selected, so the communication will be visible to all',
    'Class:Communication/Tab:Preview' => 'Resultant organizations',
    'Class:Communication/Tab:Preview+' => 'Organizations in scope of this communication',
    'Class:Communication/Tab:PreviewAll' => 'All organizations are in scope of this communication',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkCommunicationToOrganization' => 'Link Communication / Organization',
	'Class:lnkCommunicationToOrganization+' => '',
    'Class:lnkCommunicationToOrganization/Name' => '%1$s / %2$s',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Organization',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Organization name',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Communication',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'Communication Ref',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '',
));


Dict::Add('EN US', 'English', 'English', array(
	'Menu:Communication' => 'Communications',
	'Menu:Communication+' => 'All open Communications',
	'Portal:Communications' => 'Communications',
	'Portal:Communication:Previous' => 'Previous',
	'Portal:Communication:Next' => 'Next',
	'itop-communications:Communications:Section:Title'=> 'Communications',
));
