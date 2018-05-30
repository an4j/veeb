<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 30.05.2018
 * Time: 12:17
 */
require_once 'htmlTable.php';
$htmlTabel = new htmlTabel(array('a','b','c'), '#ff0000');
$htmlTabel->lisarida(array(1,2,3));
$htmlTabel->lisarida(array(4,5,6));
echo '<pre>';
print_r($htmlTabel);
echo '</pre>';
$htmlTabel->prindiTabel();