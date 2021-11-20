<?php 
	namespace App\Controllers;
	use MF\Controllers\Action;
	class IndexController extends Action
	{
		protected $layout = "layout1";
		public function index()
		{
			echo "Estamos na rota Index";
			$this->render("index",$this->layout);
		}
		public function sobreNos()
		{
			echo "Estamos na rota sobreNos";
			$this->render("sobre_nos",$this->layout);
		}
	}
?>

