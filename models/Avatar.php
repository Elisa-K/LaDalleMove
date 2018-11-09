<?php

class Avatar {
	private $connect;
	protected $id;
	protected $url;


	public function __construct()
	{
		$db = BddConnect::getInstance();
		$this->connect = $db->getDbh();
	}


	public function getAllAvatar(){
		try{
			$req = $this->connect->prepare("SELECT id, url FORM avatar");
			$req->execute();
			$req->setFetchMode( PDO::FETCH_OBJ);
			$listAvatar = array();
			while($obj= $req->fetch()){
				$avatar = new Avatar();
				$avatar->setId( $obj->id);
				$avatar->setUrl($obj->url);
				$listAvatar[]= $avatar;
			}

			return $listAvatar;
		}catch(PDOException $e){
			return null;
		}
	}

	public function getAvatarById($id){
		try{
			$req = $this->connect->prepare("SELECT id, url FORM avatar where id = :id");
			$req->bindParam(":id", $id, PDO::PARAM_INT);
			$req->execute();
			$req->setFetchMode( PDO::FETCH_OBJ);
			$obj = $req->fetch();
			$avatar = new Avatar();
			$avatar->setId( $obj->id);
			$avatar->setUrl($obj->url);
			return $avatar;
		}catch(PDOException $e){
			return null;
		}
	}
	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url ) {
		$this->url = $url;
	}


}
