<?php

class ProfilResult {

	private $id;
	private $name;
	private $descript;
	private $scoreMin;
	private $scoreMax;

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