<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 22.02.2018
 * Time: 13:01
 */
echo '<pre>';
print_r($_POST);
echo '</pre>';
// kui on soov kasutada muutujaid samade nimedega
// nagu vormi elementide nimetused
//siis kasuta
extract($_POST);
// kontrollime, mis sai
echo $eesnimi.'</br>';
echo $perenimi.'</br>';
echo $kuuPaev.'</br>';
echo $kuu.'</br>';
echo $aasta.'</br>';
