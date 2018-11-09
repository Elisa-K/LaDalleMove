<?php
include_once('models/BddConnect.php');
include_once("controller/UserController.php");

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
	case 'signIn':
		$retour = addUser();
		if(isset($retour) && $retour == 1){
			header('index.php?p=carte');
		}else{
			header('index.php');
		}
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
