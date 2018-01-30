<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.01.2018
 * Time: 10:24
 */
// üherealine kommentaar
/* mitme
* realine
 * kommentaar
 */
// väljastamine
echo "Aine - veebiprogrammeerimine"."<br/>"; // käsu lõpp - ;
print "valikaine<bt/>";
// muutujate defineerimine
$eesNimi = "Anneli"; // eesnimi, string
$pereNimi = "Jarvi"; // perenimi, string
$bussiNumber = 4; // bussi number, integer
$soiduKestvus = 0.8; // soidu kestvus, float
// konstantite defineerimine
define("NUMBER_PI", 3.13);
/*Kasutades eel defineeritud muutujad ja konstandid
*valjasta ilus teksti
 */
echo "Olen ".$eesNimi.' '.$pereNimi.'<br/>';
echo "Sõidan koolist kesklinna bussiga number".$bussiNumber.'<br/>';
echo "Midagi konstantset? PI= ".NUMBER_PI."<br/>";