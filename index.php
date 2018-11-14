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
		$listAvatar = getAllAvatar();
		if(!$retour) $vue = 'views/inscription.php';
		else {
			$_SESSION["id"] = $retour;
			$vue = 'views/ecran.php';
		}
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
			$_SESSION['StopParcours'] = $retour->getStopDay();
			if($_SESSION['StopParcours'] == 1){
				$score = getScore();
				$user = getUserById($_SESSION["id"]);
				$avatar = getAvatarById($user->getIdAvatar());
				$profil = getProfilScore($score, $avatar->getGenre());
				$vue = 'views/resultat.php';
			}else{
				$listSport = getAllSport();
				$score = getScore();
				$modalHelp = false;
				$vue = 'views/carte.php';
			}

		}
		break;
	case 'ecran':
		$vue = 'views/ecran.php';
		break;
	case 'carte':
		$score = getScore();
		$listSport = getAllSport();
		$vue = 'views/carte.php';
		break;
	case 'sportTeste':
		$retour = sportTeste($_GET['sportId']);
		$listSport = getAllSport();
		$modalHelp = false;
		$modalAvis = true;
		$idSport = $_GET['sportId'];
		$score = getScore();
		$vue = 'views/carte.php';
		break;
	case 'sendVote':
		$retour = sendVote($_GET['sportId']);
		$listSport = getAllSport();
		$modalHelp = false;
		$modalAvis = false;
		$sportId = $_GET['sportId'];
		$score = getScore();
		$vue = 'views/carte.php';
	break;
	case 'resultat':
		$score = getScore();
		$user = getUserById($_SESSION["id"]);
		$stopParcours = stopParcours();
		$avatar = getAvatarById($user->getIdAvatar());
		$profil = getProfilScore($score, $avatar->getGenre());
		$vue = 'views/resultat.php';
		break;
	case 'classement':
		$classement = getClassement();
		$vue = "views/classement.php";
		break;
	default:
		$vue = 'views/accueil.php';

}

include_once('layouts/layout.php');
