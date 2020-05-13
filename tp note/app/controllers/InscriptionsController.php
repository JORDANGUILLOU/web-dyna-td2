<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 * 
 **/
class InscriptionsController extends ControllerBase{

	public function index(){
		
	   
	    $this->loadView("InscriptionsController/index.html");
	    
	}

	/**
	 *@route("InscriptionsController/inscription","methods"=>["get"])
	**/
	public function inscription(){
		
		$this->loadView('InscriptionsController/inscription.html');

	}

}
