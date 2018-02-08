<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.01.2018
 * Time: 11:28
 */
// funktsioon soodustuse arvutamiseks
function soogiHind($taisHind, $soodusKaart, $kasOledOpilane){
    // funktsiooni sisu
    $soodusProtsent = 15; //
    $soodusHind = $taisHind;

    if ($soodusKaart == true){
        $soodusHind = $taisHind * ((100 - $soodusProtsent) / 100);
    }
    if ($kasOledOpilane){
        $soodusHind = $soodusHind - $toetus;
        // soodushind - opilastoetus; // - operaatori lühendatud kuju
    }
    return $soodusHind;
}// funtktsiooni lõpp

// kutsume funktsiooni tööle
// kui oled opilane
$soogiHind = soogiHind( taishind 2.65, $soodusKaart true, $kasOledOpilane true);
echo 'Prae hind õpilasele = '.round($soogiHind, precision 2 ).'€<br/>';
// kui olemas kliendikaart
$soogiHind = soogiHind( taishind 2.65, $soodusKaart true, $kasOledOpilane false);
echo 'Prae hind sooduskaarti omanikule = '.round($soogiHind, precision 2 ).'€<br/>';
// kui ei ole kliendikaarti
$soogiHind = soogiHind( taishind 2.65, $soodusKaart false, $kasOledOpilane false);
echo 'Prae hind = '.round($soogiHind, precision 2 ).'€<br/>';


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