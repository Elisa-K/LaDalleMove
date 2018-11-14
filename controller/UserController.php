<?php

include_once('./models/User.php');


//inscription
function addUser(){

	$user = new User();
	$user->setPseudo($_POST['pseudo']);
	$user->setPassword($_POST['password']);
	$user->setIdAvatar($_POST['idAvatar']);
	$verifLogin = $user->verifPseudo($_POST['pseudo']);
	if($verifLogin){
		$retour = $user->addUser();
	}else{
		$retour = false;
	}

	return $retour;
}


//connexion
function verifLogin(){
	$user = new User();
	$userLogin = $user->getUser( $_POST['pseudo'], $_POST['password'] );
	return $userLogin;
}


//stopper parcours

function stopParcours(){
	$user = new User();
	$retour = $user->stopDay($_SESSION['id']);
	return $retour;
}

function getUserById($idUser){
	$user = new User();
	$userLogin = $user->getUserById($idUser);
	return $userLogin;
}
