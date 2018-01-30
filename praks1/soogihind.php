<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.01.2018
 * Time: 11:28
 */
// vajalikud muutujad
$soogiHind = 2.55; // hind, EUR
$soodustusProtsent = 15; // %
$toetus = 1.80; // EUR
// arvutused
if ($soogiHind > 0 and $soodustusProtsent > 0 and $toetus > 0) {
    $soodustus = $soogiHind * $soodustusProtsent / 100;
    $hindOpilasele = $soodustus - $toetus.'<br/>';
    echo 'Soogihind opilasele = '.$hindOpilasele.'<br/>';
} else {
    echo 'Andmed ei ole taielikud<br/>';
}