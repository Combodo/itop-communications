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
	'Class:Communication/Attribute:status/Value:ongoing' => 'En cours',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'Terminé',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Annonceur',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Nom de l\'annonceur',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:icon' => 'Icône',
	'Class:Communication/Attribute:icon+' => '',
	'Class:Communication/Attribute:icon/Value:none' => 'Aucune',
	'Class:Communication/Attribute:icon/Value:none+' => '',
	'Class:Communication/Attribute:icon/Value:information' => 'Information',
	'Class:Communication/Attribute:icon/Value:information+' => '',
	'Class:Communication/Attribute:icon/Value:warning' => 'Avertissement',
	'Class:Communication/Attribute:icon/Value:warning+' => '',
	'Class:Communication/Attribute:icon/Value:tip' => 'Le saviez-vous ?',
	'Class:Communication/Attribute:icon/Value:tip+' => '',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Infos de dernière minute',
	'Class:Communication/Attribute:icon/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Titre',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Message',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Clore cette communication',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Stimulus:ev_reopen' => 'Réouvrir cette communication',
	'Class:Communication/Stimulus:ev_reopen+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Organisations ciblées',
	'Class:Communication/Attribute:organizations_list+' => 'Si aucune organisation n\'est spécifiée, la communication sera affichée pour tous les utilisateurs dans le portail',
	'Class:Communication/Attribute:org_match_type' => 'Cibler les organisations...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'sélectionnées uniquement',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'sélectionnées ou en dessous',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'La date de fin doit être supérieure à la date de début?',
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
