<?php

class SportUser {
	private $connect;
	protected $idSport;
	protected $idUser;
	protected $vote;
	protected $score;


	public function __construct()
	{
		$db = BddConnect::getInstance();
		$this->connect = $db->getDbh();
	}

	public function SportTeste($idUser, $idSport){
		try{
			$req = $this->connect->prepare("INSERT INTO sport_user (id_user, id_sport) VALUES (:idUser, :idSport)");
			$req->bindParam( ":idUser",$idUser, PDO::PARAM_INT);
			$req->bindParam( ":idSport",$idSport, PDO::PARAM_INT);
			$req->execute();
			$retour = true;
			return $retour;
		}catch (PDOException $e){
			return false;
		}

	}

	public function getSportUser($idUser, $idSport){
		try{
			$req = $this->connect->prepare("SELECT id_user, id_sport, vote FROM sport_user WHERE id_user = :idUser AND id_sport = :idSport");
			$req->bindParam( ":idUser",$idUser, PDO::PARAM_INT);
			$req->bindParam( ":idSport",$idSport, PDO::PARAM_INT);
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
//COMPTER SCORE PAR USER
	public function getScoreByUser($idUser){
		try{
			$req = $this->connect->prepare("SELECT id_user, id_sport FROM sport_user WHERE id_user = :idUser");
			$req->bindParam( ":idUser",$idUser, PDO::PARAM_INT);


			$req->execute();

			$score = $req->rowCount();
			return $score;

		}catch (PDOException $e){
			return $e->getMessage();
		}
	}

	//SEND VOTE

	public function sendVoteSport($idUser, $idSport, $vote){
		try{
			$req = $this->connect->prepare("UPDATE sport_user SET vote = :vote WHERE id_user = :idUser AND id_sport = :idSport");
			$req->bindParam( ":idUser", $idUser, PDO::PARAM_INT);
			$req->bindParam( ":idSport", $idSport, PDO::PARAM_INT);
			$req->bindParam( ":vote", $vote, PDO::PARAM_INT);
			$req->execute();
			$retour = true;
			return $retour;
		}catch (PDOException $e){
			return $e->getMessage();;
		}
	}

	public function getClassement()
	{
		try {
			$req = $this->connect->prepare("SELECT id_user, COUNT(id_sport) as score FROM sport_user LEFT JOIN user ON user.id = sport_user.id_user WHERE user.stopDay = 1 GROUP BY id_user ORDER BY score desc");
			$req->setFetchMode(PDO::FETCH_OBJ);
			$req->execute();
			$classement = array();
			while ($obj = $req->fetch()) {
				$sportUser = new SportUser();
				$sportUser->setIdUser($obj->id_user);
				$sportUser->setScore($obj->score);
				$classement[] = $sportUser;
			}

			return $classement;

		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}


	//RESULTATS DE TOUS LES USERS

	//GET MOYENNE BY ID SPORT
	public function getSumVoteBySport($idSport)
	{
		try {
			$req = $this->connect->prepare("SELECT id_user, id_sport, SUM(vote) as vote FROM sport_user WHERE id_sport = :idSport AND vote is not null");
			$req->bindParam(":idSport", $idSport, PDO::PARAM_INT);
			$req->setFetchMode(PDO::FETCH_OBJ);
			$req->execute();
			while($obj = $req->fetch()){
				$somme = $obj->vote;
			}

			return $somme;

		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	//GET NB VOTE BY ID SPORT
	public function getNbVoteBySport($idSport)
	{
		try {
			$req = $this->connect->prepare("SELECT id_user, id_sport, vote FROM sport_user WHERE id_sport = :idSport AND vote is not null");
			$req->bindParam(":idSport", $idSport, PDO::PARAM_INT);
			$req->execute();

			$nbAvis = $req->rowCount();
			return $nbAvis;

		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}



	/**
	 * @return int
	 */
	public function getIdSport() {
		return $this->idSport;
	}

	/**
	 * @param int $idSport
	 */
	public function setIdSport( $idSport ) {
		$this->idSport = $idSport;
	}

	/**
	 * @return int
	 */
	public function getIdUser() {
		return $this->idUser;
	}

	/**
	 * @param int $idUser
	 */
	public function setIdUser( $idUser ) {
		$this->idUser = $idUser;
	}

	/**
	 * @return int
	 */
	public function getVote() {
		return $this->vote;
	}

	/**
	 * @param int $vote
	 */
	public function setVote( $vote ) {
		$this->vote = $vote;
	}



	/**
	 * Get the value of score
	 */
	public function getScore()
	{
		return $this->score;
	}

	/**
	 * Set the value of score
	 *
	 * @return  self
	 */
	public function setScore($score)
	{
		$this->score = $score;

		return $this;
	}
}
