<?php

class SportUser {

	private $idSport;
	private $idUser;
	private $vote;

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


}