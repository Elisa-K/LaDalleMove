<?php

class Sport {
	private $connect;
	protected $id;
	protected $name;
	protected $image;
	protected $coordonnees;
	protected $descript;
	protected $stand;


	public function __construct()
	{
		$db = BddConnect::getInstance();
		$this->connect = $db->getDbh();
	}

	public function getSportById($id){
		try{
			$req = $this->connect->prepare( "SELECT id, name, image, coordonnees, descript, stand FROM sport where id = :id");
			$req->bindParam( ":id", $id, PDO::PARAM_INT);
			$req->setFetchMode( PDO::FETCH_OBJ);
			$obj = $req->fetch();
			if(empty($obj)){
				return null;
			}else{
				$sport = new Sport();
				$sport->setId($obj->id);
				$sport->setName($obj->name);
				$sport->setImage($obj->image);
				$sport->setCoordonnees($obj->coordonnees);
				$sport->setDescript($obj->descript);
				$sport->setStand($obj->stand);

				return $sport;


			}
		}catch(PDOException $e){
			return null;
		}
	}


	public function getAllSport(){
		try{
			$req = $this->connect->prepare( "SELECT id, name, image, coordonnees, descript, stand FROM sport where id = :id");
			$req->bindParam( ":id", $this->id, PDO::PARAM_INT);
			$req->setFetchMode( PDO::FETCH_OBJ);

			$listSport = array();
			while($obj = $req->fetch()){
				$sport = new Sport();
				$sport->setId($obj->id);
				$sport->setName($obj->name);
				$sport->setImage($obj->image);
				$sport->setCoordonnees($obj->coordonnees);
				$sport->setDescript($obj->descript);
				$sport->setStand($obj->stand);
				$listSport[] =$sport;
			}
			return $listSport;
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
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage( $image ) {
		$this->image = $image;
	}

	/**
	 * @return int
	 */
	public function getCoordonnees() {
		return $this->coordonnees;
	}

	/**
	 * @param int $coordonnees
	 */
	public function setCoordonnees( $coordonnees ) {
		$this->coordonnees = $coordonnees;
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
	public function getStand() {
		return $this->stand;
	}

	/**
	 * @param int $stand
	 */
	public function setStand( $stand ) {
		$this->stand = $stand;
	}


}
