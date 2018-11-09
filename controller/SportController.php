<?php

include_once ('./models/Sport.php');

function getAllSport(){
	$sport = new Sport();
	$listSport = $sport->getAllSport();
	return $listSport;
}
