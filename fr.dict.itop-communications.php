<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: Communication
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Communication' => 'Communication',
	'Class:Communication+' => '',
	'Class:Communication/Attribute:ref' => 'Ref',
	'Class:Communication/Attribute:ref+' => '',
	'Class:Communication/Attribute:start_date' => 'Date de début',
	'Class:Communication/Attribute:start_date+' => '',
	'Class:Communication/Attribute:end_date' => 'Date de fin',
	'Class:Communication/Attribute:end_date+' => '',
	'Class:Communication/Attribute:status' => 'Statut',
	'Class:Communication/Attribute:status+' => '',
	'Class:Communication/Attribute:status/Value:ongoing' => 'en cours',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'close',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Organisation',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Nom organisation',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:type' => 'Type',
	'Class:Communication/Attribute:type+' => '',
	'Class:Communication/Attribute:type/Value:information' => 'Information',
	'Class:Communication/Attribute:type/Value:information+' => '',
	'Class:Communication/Attribute:type/Value:warning' => 'Avertissement',
	'Class:Communication/Attribute:type/Value:warning+' => '',
	'Class:Communication/Attribute:type/Value:tip' => 'Le saviez-vous ?',
	'Class:Communication/Attribute:type/Value:tip+' => '',
	'Class:Communication/Attribute:type/Value:scoop' => 'Infos de dernières minutes',
	'Class:Communication/Attribute:type/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Titre',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Message',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Clore',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Organisations ciblées',
	'Class:Communication/Attribute:organizations_list+' => 'Si aucune organisation n\'est spécifiée, la communication sera visible par tous les utilisateurs sur le portail',
	'Class:Communication/Attribute:org_match_type' => 'Cibler les organisations...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'sélectionnées uniquement',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'sélectionées ou en dessous',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkCommunicationToOrganization' => 'Lien Communication / Organization',
	'Class:lnkCommunicationToOrganization+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Nom organisation',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Communication',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'Ref Communication',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '',
));


Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:Communication' => 'Communications',
	'Menu:Communication+' => 'Communications en cours',
	'Portal:Communications' => 'Communications',
	'Portal:Communication:Previous' => 'Précédent',
	'Portal:Communication:Next' => 'Suivant',
));

?>