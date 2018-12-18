<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2017/18 ITOMIG GmbH
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//
// Class: Communication
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Communication' => 'Mitteilung',
	'Class:Communication+' => '',
	'Class:Communication/Attribute:ref' => 'Ref',
	'Class:Communication/Attribute:ref+' => '',
	'Class:Communication/Attribute:start_date' => 'Startdatum',
	'Class:Communication/Attribute:start_date+' => '',
	'Class:Communication/Attribute:end_date' => 'Enddatum',
	'Class:Communication/Attribute:end_date+' => '',
	'Class:Communication/Attribute:status' => 'Status',
	'Class:Communication/Attribute:status+' => '',
	'Class:Communication/Attribute:status/Value:ongoing' => 'Laufend',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'Geschlossen',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Ansager',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Name des Ansagers',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:icon' => 'Icon',
	'Class:Communication/Attribute:icon+' => '',
	'Class:Communication/Attribute:icon/Value:none' => 'Keines',
	'Class:Communication/Attribute:icon/Value:none+' => '',
	'Class:Communication/Attribute:icon/Value:information' => 'Information',
	'Class:Communication/Attribute:icon/Value:information+' => '',
	'Class:Communication/Attribute:icon/Value:warning' => 'Warnung',
	'Class:Communication/Attribute:icon/Value:warning+' => '',
	'Class:Communication/Attribute:icon/Value:tip' => 'Tipp',
	'Class:Communication/Attribute:icon/Value:tip+' => '',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Breaking News',
	'Class:Communication/Attribute:icon/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Titel',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Botschaft',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Diese Mitteilung schließen',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Stimulus:ev_reopen' => 'Diese Mitteilung wiedereröffnen',
	'Class:Communication/Stimulus:ev_reopen+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Ziel-Organisationen',
	'Class:Communication/Attribute:organizations_list+' => 'Falls keine Ziel-Organisation ausgewählt wird, wird die Mitteilung allen angezeigt.',
	'Class:Communication/Attribute:org_match_type' => 'Ziel-Organisationen...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Nur die ausgewählten',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Zu Kind-Organisationen kaskadieren',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'Endedatum mus nach Startdatum liegen.',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkCommunicationToOrganization' => 'Verknüpfung Miteilung / Organisation',
	'Class:lnkCommunicationToOrganization+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Name der Organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Mitteilung',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'Mitteilungs-Ref',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '',
));


Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:Communication' => 'Mitteilungen',
	'Menu:Communication+' => 'Alle offenen Mitteilungen',
	'Portal:Communications' => 'Mitteilungen',
	'Portal:Communication:Previous' => 'Vorherige',
	'Portal:Communication:Next' => 'Nächste',
));
