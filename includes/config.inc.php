<?php

use Pachel\dbClass;

$ablakcim = array(
    'cim' => 'Mini honlap Kft.',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Mini honlap',
	'motto' => ''
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

    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);
$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
$db_config = [
    "prename"=>"",
    "server"=>"localhost",
    "dbname"=>"gyakorlat7",
    "username"=>"root",
    "password"=>"",
    "queryClassDir" => __DIR__ . "/../tpl/queries",
    "modelDir" => __DIR__ . "/../src/Models",
    "default_result_mode" => dbClass::DB_RESULT_TYPE_ARRAY
];
dbClass::instance()->settings()->connect($db_config);

define("IMG_DIR",__DIR__."/../images/kepek/");
define("IMG_SORT_DIR","images/kepek/");
define("IMG_SM_SIZE",200);
define("IMG_LG_SIZE",1200);
?>