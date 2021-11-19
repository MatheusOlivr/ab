<?php 
	namespace App\Controllers;
	class IndexController
	{
		private $view;
		public function __construct()
		{
			$this->view = new \stdClass();
		}
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
		protected function render($view)
		{
			$getClass = get_class($this);
			$getClass = str_replace("App\\Controllers\\","",$getClass);
			$getClass = str_replace("Controller","",$getClass);
			require_once("../App/Views/".$getClass.DIRECTORY_SEPARATOR.$view.".phtml");
		}
	}
?>