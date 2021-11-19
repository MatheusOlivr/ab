<?php 
	namespace App\Controllers;
	use MF\Controller\Action;
	class IndexController extends Action
	{
		public function index()
		{
			$this->view->data = array("sofa","cadeira","cama");
			$this->render("index");
		}
		public function sobreNos()
		{
			$this->view->data = array("notebook","smartphone");
			$this->render("sobre_nos");	
		}
	}
?>