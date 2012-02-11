<?php
/**
 * Dominic Richter
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$doc =& JFactory::getDocument();
$doc->addStyleSheet( JURI::base() . 'modules/mod_wetter17/style/style.css', 'text/css', null, array() );

//Daten einlesen
$sProjectName  = $params->get('projekt');
$sApiKey       = $params->get('key');
$sCityCode     = $params->get('city');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$wetter = modWetter17Helper::getWetter($sProjectName, $sApiKey, $sCityCode);
require(JModuleHelper::getLayoutPath('mod_wetter17'));
?>
