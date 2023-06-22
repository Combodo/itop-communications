<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2023 ITOMIG GmbH
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
	'Class:Communication/Attribute:organizations_list+' => 'Die Einstellung wird ignoriert, falls Ziel-Organisationen über ein OQL ermittelt werden.',
	'Class:Communication/Attribute:org_match_type' => 'Ziel-Organisationen...',
	'Class:Communication/Attribute:org_match_type+' => 'Es sind 3 Wege möglich, um zu definieren, für welche Organisationen eine Mitteilung angzeigt wird:
- Statische Liste an ausgewählten Organisationen,
- Statische Liste an Organisationen inklusive aller Kind-Organisationen,	
- Organisationen werden über eine OQL-Abfrage ermittelt.',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Nur die ausgewählten',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => 'Statische Liste an ausgewählten Organisationen',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Zu Kind-Organisationen kaskadieren',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => 'Statische Liste an Organisationen inklusive aller Kind-Organisationen',
	'Class:Communication/Attribute:org_match_type/Value:oql' => 'Organisationen einer OQL',
	'Class:Communication/Attribute:org_match_type/Value:oql+' => 'Organisationen, die über die OQL-Abfrage ermittelt werden.',
	'Class:Communication/Attribute:org_oql' => 'OQL-Abfrage',
	'Class:Communication/Attribute:org_oql+' => 'Die OQL darf auschließlich Organisationen abfragen.',
	'Class:Communication/Attribute:allowed_portals' => 'Anzeige im...',
	'Class:Communication/Attribute:allowed_portals+' => 'User Interfaces in denen die Mitteilung angezeigt wird.',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'Endedatum mus nach Startdatum liegen.',
	'Class:Communication/Error:OQLMustBeProvided' => 'Es muss eine OQL-Abfrage definiert sein, um die Ziel-Organisationen über eine OQL zu ermitteln.',
	'Class:Communication/Error:OQLMustReturnOrganization' => 'Die "Organisations-OQL" darf ausschließlich Organisationen zurückgeben.',
	'Class:Communication/Error:OQLNotValid' => 'Die "Organisations-OQL-Abfrage" ist ungültig: %1$s',
	'Class:Communication/Warning:OQLProvidedButUnused' => 'Es wurde eine "OQL-Abfrage" definiert, die jedoch nicht genutzt wird solange für "Ziel-Organisationen..." nicht "Organisation einer OQL" ausgewählt ist.',
	'Class:Communication/Warning:NoOrgSoAll' => 'Es wurde keine Organisation ausgewählt, so dass die Mittelung für alle sichtbar ist.',
	'Class:Communication/Tab:Preview' => 'Resultierende Organisationen',
	'Class:Communication/Tab:Preview+' => 'Die von dieser Mitteilung betroffenen Organisationen',
	'Class:Communication/Tab:PreviewAll' => 'Alle bestehenden Organisationen',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkCommunicationToOrganization' => 'Verknüpfung Miteilung / Organisation',
	'Class:lnkCommunicationToOrganization+' => '',
	'Class:lnkCommunicationToOrganization/Name' => '%1$s / %2$s',
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
	'itop-communications:Communications:Section:Title' => 'Mitteilungen',
	'Communication:when' => 'Wenn',
	'Communication:to_whom' => 'An wen und wo',
	'Communication:what' => 'Was',
));
