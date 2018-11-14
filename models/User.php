<?php

class User {
	private $connect;
	protected $id;
	protected $pseudo;
	protected $password;
	protected $stopDay;
	protected $idAvatar;


	public function __construct()
	{
		$db = BddConnect::getInstance();
		$this->connect = $db->getDbh();
	}

	// STOP PARCOURS
	public function stopDay($id){
		try {
			$req = $this->connect->prepare("UPDATE user SET stopDay = 1 WHERE id = :id");

			$req->bindParam(":id", $id, PDO::PARAM_INT);
			$req->execute();
			return true;

		}catch(PDOException $e){
			return false;
		}

	}

	//Connexion
	public function getUser($pseudo, $password){
		try {
			$req = $this->connect->prepare("SELECT id, pseudo, password, stopDay, id_avatar FROM user WHERE pseudo = :pseudo");

			$req->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
			$req->execute();
			$req->setFetchMode(PDO::FETCH_OBJ);
			$obj = $req->fetch();
			if(empty($obj)){
				return false;
			}else{
				if (password_verify($password, $obj->password)) {
					$user = new User();
					$user->setId($obj->id);
					$user->setPseudo($obj->pseudo);
					$user->setPassword($obj->password);
					$user->setStopDay($obj->stopDay);
					$user->setIdAvatar($obj->id_avatar);
					return $user;
				} else {
					return false;
				}
			}
		}catch(PDOException $e){
			return false;
		}

	}
	//vérification pseudo

	public function verifPseudo($pseudo){
		try{
			$req = $this->connect->prepare("SELECT pseudo FROM user where pseudo = :pseudo");
			$req->bindParam( ":pseudo",$pseudo, PDO::PARAM_STR);

			$req->execute();
			$obj = $req->fetch();
			if(empty($obj)){
				return true;
			}else {
				return false;
			}

		}catch (PDOException $e){
			return $e->getMessage();
		}
	}
	//Inscription
	public function addUser(){
		try{
			$req = $this->connect->prepare("INSERT INTO user(pseudo, password, id_avatar, stopDay) VALUES (:pseudo, :password, :idAvatar, 0)");
			$req->bindParam( ":pseudo",$this->pseudo, PDO::PARAM_STR);
			$options = [
				'cost' => 11
			];
			$password = password_hash($this->password, PASSWORD_BCRYPT, $options);

			$req->bindParam(":password", $password, PDO::PARAM_STR);
			$req->bindParam( ":idAvatar",$this->idAvatar, PDO::PARAM_INT);
			$req->execute();

			$retour = $this->connect->lastInsertId();

			return $retour;
		}catch (PDOException $e){
			return false;
		}
	}

	public function getUserById($id){
		try{
			$req = $this->connect->prepare("SELECT id, pseudo, id_avatar FROM user WHERE id = :id");
			$req->bindParam(":id", $id, PDO::PARAM_INT);
			$req->execute();
			$req->setFetchMode(PDO::FETCH_OBJ);
			$obj = $req->fetch();
			if(empty($obj)){
				return null;
			}else {
				$user = new User();
				$user->setId( $obj->id );
				$user->setPseudo( $obj->pseudo );
				$user->setIdAvatar( $obj->id_avatar );


				return $user;
			}
		}catch(PDOException $e){
			return "La requête a échoué !";
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
	public function getPseudo() {
		return $this->pseudo;
	}

	/**
	 * @param string $pseudo
	 */
	public function setPseudo( $pseudo ) {
		$this->pseudo = $pseudo;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword( $password ) {
		$this->password = $password;
	}

	/**
	 * @return bool
	 */
	public function getStopDay() {
		return $this->stopDay;
	}

	/**
	 * @param bool $stopDay
	 */
	public function setStopDay( $stopDay ) {
		$this->stopDay = $stopDay;
	}

	/**
	 * @return int
	 */
	public function getIdAvatar() {
		return $this->idAvatar;
	}

	/**
	 * @param int $idAvatar
	 */
	public function setIdAvatar( $idAvatar ) {
		$this->idAvatar = $idAvatar;
	}


}
