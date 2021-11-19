<?php
 /**
 * Spanish Localized data
 *
 * @copyright   Copyright (C) 2010-2021 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 * @traductor   Miguel Turrubiates <miguel_tf@yahoo.com> 
 * @notas       Utilizar codificación UTF-8 para mostrar acentos y otros caracteres especiales 
 */

//
// Class: Communication
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Communication' => 'Comunicación',
	'Class:Communication+' => '',
	'Class:Communication/Attribute:ref' => 'Ref',
	'Class:Communication/Attribute:ref+' => 'Referencia',
	'Class:Communication/Attribute:start_date' => 'Fecha de Inicio',
	'Class:Communication/Attribute:start_date+' => '',
	'Class:Communication/Attribute:end_date' => 'Fecha de Fin',
	'Class:Communication/Attribute:end_date+' => '',
	'Class:Communication/Attribute:status' => 'Estatus',
	'Class:Communication/Attribute:status+' => '',
	'Class:Communication/Attribute:status/Value:ongoing' => 'En Proceso',
	'Class:Communication/Attribute:status/Value:ongoing+' => '',
	'Class:Communication/Attribute:status/Value:closed' => 'Cerrado',
	'Class:Communication/Attribute:status/Value:closed+' => '',
	'Class:Communication/Attribute:org_id' => 'Anunciante',
	'Class:Communication/Attribute:org_id+' => '',
	'Class:Communication/Attribute:org_name' => 'Nombre del Anunciante',
	'Class:Communication/Attribute:org_name+' => '',
	'Class:Communication/Attribute:icon' => 'Icono',
	'Class:Communication/Attribute:icon+' => '',
	'Class:Communication/Attribute:icon/Value:none' => 'Ninguno',
	'Class:Communication/Attribute:icon/Value:none+' => '',
	'Class:Communication/Attribute:icon/Value:information' => 'Información',
	'Class:Communication/Attribute:icon/Value:information+' => '',
	'Class:Communication/Attribute:icon/Value:warning' => 'Advertencia',
	'Class:Communication/Attribute:icon/Value:warning+' => '',
	'Class:Communication/Attribute:icon/Value:tip' => 'Consejo',
	'Class:Communication/Attribute:icon/Value:tip+' => '',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Últimas noticias',
	'Class:Communication/Attribute:icon/Value:scoop+' => '',
	'Class:Communication/Attribute:title' => 'Título',
	'Class:Communication/Attribute:title+' => '',
	'Class:Communication/Attribute:message' => 'Mensaje',
	'Class:Communication/Attribute:message+' => '',
	'Class:Communication/Stimulus:ev_close' => 'Cerrar esta comunicación',
	'Class:Communication/Stimulus:ev_close+' => '',
	'Class:Communication/Stimulus:ev_reopen' => 'Reabrir esta comunicación',
	'Class:Communication/Stimulus:ev_reopen+' => '',
	'Class:Communication/Attribute:organizations_list' => 'Organización Destino',
	'Class:Communication/Attribute:organizations_list+' => 'Si no se selecciona organización, la comunicación sera desplegada a Todos.',
	'Class:Communication/Attribute:org_match_type' => 'Organizaciones Destino...',
	'Class:Communication/Attribute:org_match_type+' => '',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Sólo las seleccionadas',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Cascada a organizaciones asociadas',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'La fecha de fin debe ser mayor que la fecha de inicio.',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:lnkCommunicationToOrganization' => 'Relación Comunicación / Organización',
	'Class:lnkCommunicationToOrganization+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Organización',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Nombre de la Organización',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Comunicación',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'Ref. Comunicación',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '',
));


Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:Communication' => 'Comunicaciones',
	'Menu:Communication+' => 'Todas las comunicaciones abiertas',
	'Portal:Communications' => 'Communicaciones',
	'Portal:Communication:Previous' => 'Previo',
	'Portal:Communication:Next' => 'Siguiente',
));
