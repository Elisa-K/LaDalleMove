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
	$score = $sportUser->getScore( $_SESSION['id']);
	return $score;
}

function getProfilScore($score){
	$profilResult = new ProfilResult();
	$profil = $profilResult->getProfilResult( $score);
	return $profil;
}
//verif sport testé

//send vote

// get score
