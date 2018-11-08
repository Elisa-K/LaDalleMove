<?php

class User {

	private $id;
	private $pseudo;
	private $stopDay;
	private $idAvatar;


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