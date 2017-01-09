<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_wetter_com
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
JLoader::register('ModWetterComHelper', __DIR__ . '/helper.php');

$doc =& JFactory::getDocument();
$doc->addStyleSheet(JURI::base() . 'modules/mod_wetter_com/style/style.css', 'text/css', null, array());

//Daten einlesen
$sProjectName  = $params->get('projekt');
$sApiKey       = $params->get('key');
$sCityCode     = $params->get('city');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$wetter = ModWetterComHelper::getWetter($sProjectName, $sApiKey, $sCityCode);
require JModuleHelper::getLayoutPath('mod_wetter_com', $params->get('layout', 'default'));
