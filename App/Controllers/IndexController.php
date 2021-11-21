<?php 
	namespace App\Controllers;
	use MF\Controllers\Action;
	class IndexController extends Action
	{
		protected $layout = "layoutDefault";
		public function index()
		{
			$this->render("index",$this->layout);
		}
		public function sobreNos()
		{
			$this->render("sobre_nos",$this->layout);
		}
	}
?>

