<?php

include_once('./models/Avatar.php');

function getAvatarById($idAvatar){
	$avatar = new Avatar();
	$avatarImg = $avatar->getAvatarById( $idAvatar);
	return $avatarImg;
}

function getAllAvatar(){
	$avatar = new Avatar();
	$listAvatar = $avatar->getAllAvatar();
	return $listAvatar;

}
