<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 29.05.2018
 * Time: 21:43
 */

function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    $soodusHind = $taisHind;
    $soodustusProtsent = 15;
    $opilaseToetus = 1.80; // €

    if($soodusKaart){
        $soodusHind = $taisHind * (100 - $soodustusProtsent) / 100;
    }
    if($kasOledOpilane){
        $soodusHind -= $opilaseToetus;
    }
    return $soodusHind;
}

// funktsioon vormi väljastamiseks
// vorm hoiame vorm.html failis
// vormi sisu loeme antud failist ja väljastame
function loeVormFailist($failinimi)
{
    // siia salvestame sisu
    $sisu = '';
    // kontrollime vajaliku faili olemasolu
    if (file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)) {
        // saab failist lugeda
        $fp = fopen($failinimi, 'r'); // tekitame ühendus lugemiseks
        // loeme failist täissisu
        $sisu = fread($fp, filesize($failinimi));
        fclose($fp); // paneme ühendus failiga kinni
    } else {
        $sisu = 'Probleem failiga "' . $failinimi . '".<br />';
    }
    echo $sisu;
}