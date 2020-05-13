<?php
namespace controllers;

 class InscriptionController extends ControllerBase{
function index(){
		$this->loadView("InscriptionController/index.html");
	}

	public function bouton(){
		
		$this->loadView('InscriptionController/bouton.html');

	}

	public function get($name,$adresse){
		
		$this->loadView('InscriptionController/get.html',['name'=>$name, 'adresse'=>$adresse]);

	}

}
