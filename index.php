<?php
include_once('models/BddConnect.php');
include_once("controller/UserController.php");
include_once("controller/SportController.php");
include_once("controller/SportUserController.php");
include_once("controller/AvatarController.php");

if (isset($_REQUEST['p'])) {
	$page = $_REQUEST['p'];
} else {
	$page = null;
}

session_start();

switch($page){
	case 'accueil':;
		$vue = 'views/accueil.php';
	break;
	case 'signInUp':
		$vue = 'views/signInUp.php';
	break;
	case 'inscription':
		$listAvatar = getAllAvatar();
		$vue = 'views/inscription.php';
	break;
	case 'signIn':
		$retour = addUser();
		if(!$retour) $vue = 'views/inscription.php';
		else $vue = 'views/ecran.php';
	break;
	case 'connexion':
		$vue = 'views/connexion.php';
	break;
	case "signUp":
		$retour = verifLogin();
		if(empty($retour)){
			$vue = 'views/connexion.php';
		}else{
			$_SESSION["id"] = $retour->getId();
			$vue = 'views/ecran.php';
		}
	break;
	case 'ecran':
		$vue = 'views/ecran.php';
		break;
	case 'carte':
		$listSport = getAllSport();
		$vue = 'views/carte.php';
	break;
	case 'resultat':
		$vue = 'views/resultat.php';
		break;
	default:
		$vue = 'views/accueil.php';

}

include_once('layouts/layout.php');
