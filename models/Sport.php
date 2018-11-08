<?php

class Sport {

	private $id;
	private $name;
	private $image;
	private $coordonnees;
	private $descript;
	private $stand;

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