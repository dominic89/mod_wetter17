<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
?>
	<p style="text-align:center;"><?php echo $wetter->name; ?></p>

	<h4>Aktuell</h4>

		<ul>
            <li>Zustand: <?php echo $wetter->ZustandHeute;?></li>
		    <li><img src="/joomla/modules/mod_wetter17/img/icons/d_<?php echo $wetter->BildHeute;?>_b.png" alt="<?php echo $wetter->ZustandHeute;?>" title="<?php echo $wetter->ZustandHeute;?>" width="73" height="63" /></li>	
		    <li>Niederschlag: <?php echo $wetter->NiederschlagHeute;?> %</li>
            <li>Wind: <?php echo $wetter->WindRichHeute; ?> mit <?php echo $wetter->WindGesHeute; ?> km/h</li>
		    <li>Min: <?php echo $wetter->MinHeute;?> &deg;C / Max: <?php echo $wetter->MaxHeute;?> &deg;C</li>
        </ul>
	    <hr />
	    <h4>Morgen</h4>

		<ul>
            <li>Zustand: <?php echo $wetter->ZustandMorgen; ?></li>
            <li><img src="/joomla/modules/mod_wetter17/img/icons/d_<?php echo $wetter->BildMorgen;?>_b.png" alt="<?php echo $wetter->ZustandMorgen;?>" title="<?php echo $wetter->ZustandMorgen;?>" width="73" height="63" /></li>
		    <li>Niederschlag: <?php echo $wetter->NiederschlagMorgen;?> %</li>
            <li>Wind: <?php echo $wetter->WindRichMorgen;?> mit <?php echo $wetter->WindGesMorgen;?> km/h</li>
            <li>Min: <?php echo $wetter->MinMorgen;?> &deg;C / Max: <?php echo $wetter->MaxMorgen;?> &deg;C</li>
        </ul>

        <br />
        <br />
        <br />
        <br />

	<p><?php echo $wetter->text;?></p>
    <a href="http://www.wetter.com/deutschland/falkenau/DE0002821.html" alt="<?php echo $wetter->text;?>" target="_blank"><?php echo $wetter->link;?></a>
