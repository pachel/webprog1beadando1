<?php
//include('./includes/config.inc.php');
use Pachel\dbClass;


require __DIR__."/vendor/autoload.php";
require __DIR__."/includes/config.inc.php";

if(file_exists(__DIR__."/includes/dev_db.conf.php")){
    require __DIR__."/includes/dev_db.conf.php";
}
else{
    require __DIR__."/includes/db.conf.php";
}
dbClass::instance()->settings()->connect($db_config);
/**
 * @var dbClass $db
 */
$db = dbClass::instance();

//$keres = current($oldalak);
$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else { 
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}
include('./templates/index.tpl.php');
?>