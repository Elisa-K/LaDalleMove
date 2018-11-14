<?php

include_once('./models/SportUser.php');
include_once('./models/ProfilResult.php');

//Sport testé
function sportTeste($sportId){
	$sportUser = new SportUser();
	$sportTest = $sportUser->SportTeste( $_SESSION['id'], $sportId);
	return $sportTest;
}

function getScore(){
	$sportUser = new SportUser();
	$score = $sportUser->getScoreByUser( $_SESSION['id']);
	return $score;
}

function getProfilScore($score, $genre){
	$profilResult = new ProfilResult();
	$profil = $profilResult->getProfilResult($score, $genre);
	return $profil;
}

function getSumVoteBySport($idSport){
	$sportUser = new SportUser();
	$somme = $sportUser->getSumVoteBySport($idSport);
	return $somme;
}

function getNbVoteBySport($idSport)
{
	$sportUser = new SportUser();
	$nbVote = $sportUser->getnbVoteBySport($idSport);
	return $nbVote;
}

function getMoyBySport($idSport){
	$somme = getSumVoteBySport($idSport);
	$nbVote = getNbVoteBySport($idSport);

	$moyenne = round($somme/$nbVote);

	return $moyenne;

}

function sendVote($idSport){
	$sportUser = new sportUser;
	$retour = $sportUser->sendVoteSport($_SESSION['id'], $idSport, $_POST['vote']);
	return $retour;
}

function getClassement(){
	$sportUser = new SportUser();
	$classement = $sportUser->getClassement();
	return $classement;
}
