<?php
namespace models;

class Inscription{

	private $id;

	private $nom;

	private $email;

	private $dateHeure;

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

	 public function getNom(){
		return $this->nom;
	}

	 public function setNom($nom){
		$this->nom=$nom;
	}

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getDateHeure(){
		return $this->dateHeure;
	}

	 public function setDateHeure($dateHeure){
		$this->dateHeure=$dateHeure;
	}

	 public function __toString(){
		return ($this->dateHeure??'no value').'';
	}

}