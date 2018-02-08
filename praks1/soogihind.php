<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.01.2018
 * Time: 11:28
 */
// funktsioon soodustuse arvutamiseks
require_once 'funktsioon.php'; // nõuame ligipääsu failile
loeVormFailist(failinimi vorm.html)
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
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

// testimiseks paneme erinevad väärtused paika, kasutame selleks massiivi (sooduskaart, kasOledOpilane
// kasutajate tabel (massiivis)
// esimene õpilased
// teine õpetajad
// kolmas külalised
$kasutajad = array(
    array(
        'roll' => 'opilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'opetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'kylaline',
        'soodus' => false,
        'opilaskaart' => false
    )
);
$praed = array(
    array(
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'Šnitsel sealihast, lisand, kaste, salat, leib',
        'taishind' => '2.58'
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'Seapraad, lisand, kaste, salat, leib',
        'taishind' => '2.65'
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes',
        'kirjeldus' => 'Hakklihapallid, lisand, laste, salat, leib',
        'taishind' => '1.30'
    ),
    array(
        'nimetus' => 'Kalasupp',
        'kirjeldus' => 'Supp, leib',
        'taishind' => '1.25'
    ),
    array(
        'nimetus' => 'Rassolnik',
        'kirjeldus' => 'Supp, hapukoor, leib',
        'taishind' => '1.20'
    )
);
for ($praed as $praad){
    echo $praad'nimetus';
    echo $praad'kirjeldus';
}
// vaatame kasutajate massiivi läbi
// for on tsükli muutuja defineerija, tingimuse ja kehtivuse kontroll
foreach ($kasutajad as $kasutaja){
    foreach ($kasutajad as $voti=>$vaartus){
        // kutsume funktsiooni tööle
        $soogiHind = soogiHind( taisHind 2.65, $kasutaja['soodus'], $kasutaja'opilaskaart')};
    echo 'Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, precision 2).' €<br/>';
}
// funktsioon vormi väljastamiseks
// vorm hoiame vorm.html failis
// vormi sisu loeme antud failist
// väljastame
function loeVormFailist($failinimi){
    // kontrollime vajaliku faili olemasolu
    if (file_exists($failinimi) and is_file($failinimi)and is_readable($failinimi)){
        //saab faili avada
        Stp = (open ($failinimi, mode 'r');
        $sisu = fread(Stp, filesize($failinimi));
        fclose())
    }else {
        echo 'Probleem '.$failinimi.'failiga<br/>';
        exit;
    }
    echo $sisu;
}