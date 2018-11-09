<?php

class ProfilResult {
	private $connect;
	protected $id;
	protected $name;
	protected $descript;
	protected $scoreMin;
	protected $scoreMax;

	public function __construct()
	{
		$db = BddConnect::getInstance();
		$this->connect = $db->getDbh();
	}

	public function getProfilResult($score){
		try{
			$req = $this->connect->prepare("SELECT id, name, descript FROM profil_result WHERE :score BETWEEN score_min AND score_max");
			$req ->bindParam( ":score", $score, PDO::PARAM_INT);
			$req->execute();
			$req->setFetchMode( PDO::FETCH_OBJ);
			$obj = $req->fetch();
			if(empty($obj)){
				return null;
			}else{
				$profilResult = new ProfilResult();
				$profilResult->setId($obj->id);
				$profilResult->setName($obj->name);
				$profilResult->setDescript($obj->descript);

				return $profilResult;
			}

		}catch (PDOException $e){
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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getDescript() {
		return $this->descript;
	}

	/**
	 * @param string $descript
	 */
	public function setDescript( $descript ) {
		$this->descript = $descript;
	}

	/**
	 * @return int
	 */
	public function getScoreMin() {
		return $this->scoreMin;
	}

	/**
	 * @param int $scoreMin
	 */
	public function setScoreMin( $scoreMin ) {
		$this->scoreMin = $scoreMin;
	}

	/**
	 * @return int
	 */
	public function getScoreMax() {
		return $this->scoreMax;
	}

	/**
	 * @param int $scoreMax
	 */
	public function setScoreMax( $scoreMax ) {
		$this->scoreMax = $scoreMax;
	}



}
