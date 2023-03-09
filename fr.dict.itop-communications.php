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
	'Class:Communication/Attribute:organizations_list' => 'Organisations choisies',
	'Class:Communication/Attribute:organizations_list+' => 'Si aucune organisation n\'est spécifiée, la communication sera affichée pour toutes les organisations',
	'Class:Communication/Attribute:org_match_type' => 'Cibler les organisations...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'choisies uniquement',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => 'Uniquement les organisations choisies, celles explicitement attachées à la communication',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'choisies ou en dessous',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => 'Les organisations choisies et toutes leurs descendantes',
    'Class:Communication/Attribute:org_match_type/Value:oql' => 'définies par OQL',
    'Class:Communication/Attribute:org_match_type/Value:oql+' => 'Les organisations définies dynamiquement par l\'OQL',
    'Class:Communication/Attribute:org_oql' => 'OQL',
    'Class:Communication/Attribute:org_oql+' => 'Cette OQL doit retourner uniquement des Organisations.
A ne spécifier que si vous mettez "définies par OQL" dans le champ "Cibler les organisations..."',
	'Class:Communication/Attribute:allowed_portals' => 'Portails autorisés',
	'Class:Communication/Attribute:allowed_portals+' => '',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'La date de fin doit être supérieure à la date de début',
    'Class:Communication/Error:OQLMustBeProvided' => 'Un OQL doit être spécifié, puisque vous avez demandé à cibler les organisations... définies par OQL',
    'Class:Communication/Error:OQLMustReturnOrganization' => 'L\'OQL doit retourner des Organisations uniquement, ce n\'est pas ce qu\'il fait',
    'Class:Communication/Error:OQLNotValid' => 'La requête OQL n\'est pas valide : %1$s',
    'Class:Communication/Warning:OQLProvidedButUnused' => 'Vous avez fourni un OQL qui ne sera pas utilisé, car vous n\'avez pas positionné "Cibler les organisations..." à la valeur "définies par OQL"',
    'Class:Communication/Warning:NoOrgSoAll' => 'Aucune organisation choisie, la communication sera visible par toutes',
    'Class:Communication/Tab:Preview' => 'Organisations résultantes',
    'Class:Communication/Tab:Preview+' => 'Les organisations concernées par cette communication',
    'Class:Communication/Tab:PreviewAll' => 'Toutes les organisations existantes',
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
	'itop-communications:Communications:Section:Title'=> 'Communications',
));
