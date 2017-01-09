<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_wetter_com
 *
 * @since  1.0
 */
class ModWetterComHelper
{

    public function getWetter($sProjectName, $sApiKey, $sCityCode)
    {

        // Generieren der Checksumme muss f�r jeden City Code neu berechnet werden
        $sSearchUrl = 'http://api.wetter.com/forecast/weather';
        $sChecksum = md5($sProjectName . $sApiKey . $sCityCode);
        $sSearchUrl .= '/city/' . $sCityCode;
        $sSearchUrl .= '/project/' . $sProjectName;
        $sSearchUrl .= '/cs/' . $sChecksum;

        //Ausgabe
        $xml = simplexml_load_file("$sSearchUrl");

        // Ergebnis einlesen
        //heute
        $wetter->name = $xml->name;
        $wetter->ZustandHeute = $xml->forecast->date[0]->w_txt;
        $wetter->WetterHeute = $xml->forecast->date[0]->w;
        $wetter->BildHeute = substr($wetter->WetterHeute, 0, 1);
        $wetter->NiederschlagHeute = $xml->forecast->date[0]->pc;
        $wetter->WindRichHeute = $xml->forecast->date[0]->wd_txt;
        $wetter->WindGesHeute = $xml->forecast->date[0]->ws;
        $wetter->MinHeute = $xml->forecast->date[0]->tn;
        $wetter->MaxHeute = $xml->forecast->date[0]->tx;

        //morgen
        $wetter->ZustandMorgen = $xml->forecast->date[1]->w_txt;
        $wetter->WetterMorgen = $xml->forecast->date[1]->w;
        $wetter->BildMorgen = substr($wetter->WetterMorgen, 0, 1);
        $wetter->NiederschlagMorgen = $xml->forecast->date[1]->pc;
        $wetter->WindRichMorgen = $xml->forecast->date[1]->wd_txt;
        $wetter->WindGesMorgen = $xml->forecast->date[1]->ws;
        $wetter->MinMorgen = $xml->forecast->date[1]->tn;
        $wetter->MaxMorgen = $xml->forecast->date[1]->tx;

        /* Link zu Wetter.com */
        $wetter->text = $xml->credit->text;
        $wetter->link = $xml->credit->link;

        return $wetter;

    }
}
