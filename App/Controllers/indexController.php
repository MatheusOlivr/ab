<?php 
	namespace App\Controllers;
	use MF\Controller\Action;
	use App\Connection;
	use App\Models\Product;
	class IndexController extends Action
	{
		public function index()
		{
			//$this->view->data = array("sofa","cadeira","cama");

			// instacia da conexao
			$conn = Connection::getDb();
			//instânciar modelo
			$product = new Product($conn);
			$products = $product->getProducts();
			$this->view->data = $products;
			$this->render("index","layoutDefault");
		}
		public function sobreNos()
		{
			//$this->view->data = array("notebook","smartphone");
			$conn = Connection::getDb();
			//instânciar modelo
			$product = new Product($conn);
			$products = $product->getProducts();
			$this->view->data = $products;
			$this->render("sobre_nos","layoutDefault");	
		}
	}
?>