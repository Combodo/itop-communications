<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2016 COMBODO SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
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
	'Class:Communication/Attribute:status/Value:ongoing' => 'ongoing',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'closed',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Organization',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Organization name',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:type' => 'Type',
	'Class:Communication/Attribute:type+' => '',
	'Class:Communication/Attribute:type/Value:information' => 'Information',
	'Class:Communication/Attribute:type/Value:information+' => '',
	'Class:Communication/Attribute:type/Value:warning' => 'Warning',
	'Class:Communication/Attribute:type/Value:warning+' => '',
	'Class:Communication/Attribute:type/Value:tip' => 'Tip',
	'Class:Communication/Attribute:type/Value:tip+' => '',
	'Class:Communication/Attribute:type/Value:scoop' => 'Breaking news',
	'Class:Communication/Attribute:type/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Title',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Message',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Close',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Target organizations',
	'Class:Communication/Attribute:organizations_list+' => 'If no organization is selected, every user will be able to see it on the portal',
	'Class:Communication/Attribute:org_match_type' => 'Target organizations...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Only selected',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Cascade to child organization',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkCommunicationToOrganization' => 'Link Communication / Organization',
	'Class:lnkCommunicationToOrganization+' => '',
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
));

?>
