<?php
include_once('library/PDOFactory.php');
$pdo = PDOFactory::getMysqlConnection();

if (isset($_REQUEST['p'])) {
	$page = $_REQUEST['p'];
} else {
	$page = null;
}


switch($page){
	case 'accueil':

		break;
	default:
		$vue = 'views/accueil.php';

}

include_once('layouts/layout.php');
