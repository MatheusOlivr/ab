<?php 
	namespace App\Controllers;
	class IndexController
	{
		private $view;
		public function index()
		{
			echo "Estamos na rota Index";
			$this->render("index");
		}
		public function sobreNos()
		{
			echo "Estamos na rota sobreNos";
			$this->render("sobre_nos");
		}
		public function render($view)
		{
			$getClass = get_class($this);
			$getClass = str_replace("App\\Controllers\\","",$getClass);
			$getClass = str_replace("Controller","",$getClass);
			require_once("../App/Views/".$getClass.DIRECTORY_SEPARATOR.$view.".phtml");
		}
	}
?>

