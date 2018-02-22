<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 22.02.2018
 * Time: 13:26
 */
require_once 'ab_konf.php';
// ühendus serveriga
function yhendus(){
    $ab_yhendus = mysqli_connect(AB_host, user:AB_USER, password:AB_PASS, database:AB_NIMI);
        if($ab_yhendus == false){
            echo'Probleem andmebaasiga yhendamisega<br/>';
            echo mysqli_connect_error().'<br/>';
            echo mysqli_connect_errno().'<br/>';
            exit
        } else (
            echo'Yhendus on loodud<br/>';
        )
    return $ab_yhendus;
}

// päringute lükkamine andmebaasi
function saadaAndmed($ab_yhendus, $sql){
    $tulemus = mysqli_query($ab_yhendus, $sql);
    if(tulemus == false) {
        echo 'Probleem paringuga' . $sql . '<br/>';
        echo mysqli_error($ab_yhendus);
        echo mysqli_errno($ab_yhendus);
        return false;
        } else (
            return $tulemus;
    )
}