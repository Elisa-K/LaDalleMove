<?php
include_once('library/PDOFactory.php');
$pdo = PDOFactory::getMysqlConnection();

if (isset($_REQUEST['p'])) {
	$page = $_REQUEST['p'];
} else {
	$page = null;
}


switch($page){
	case 'accueil':;
		$vue = 'views/accueil.php';
	break;
	case 'inscription':
		$vue = 'views/inscription.php';
	break;
	case 'carte':
		$vue = 'views/carte.php';
	break;
	case 'resultat':
		$vue = 'views/resultat.php';
		break;
	default:
		$vue = 'views/accueil.php';

}

include_once('layouts/layout.php');
