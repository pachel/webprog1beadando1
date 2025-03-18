<?php

use Pachel\dbClass;

$ablakcim = array(
    'cim' => 'Mini honlap Kft.',
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Mini honlap Kft.'
);
/**
 * menun[0] => 1 ha nincs bejelentkezve, de látható
 * menun[1] => 1 ha be van jelentkezve, és látható
 */
$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
//	'tesztgyar' => array('fajl' => 'tesztgyar', 'szoveg' => 'Tesztgyár', 'menun' => array(0,1)),
//	'tesztek' => array('fajl' => 'tesztek', 'szoveg' => 'Tesztek', 'menun' => array(1,1)),

    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);
$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

define("IMG_DIR",__DIR__."/../images/kepek/");
define("IMG_SORT_DIR","images/kepek/");
define("IMG_SM_SIZE",200);
define("IMG_LG_SIZE",1200);
?>