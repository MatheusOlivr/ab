<?php 
	namespace App\Controllers;
	use MF\Controllers\Action;
	use App\Connection;
	use App\Models\Product;
	class IndexController extends Action
	{
		protected $layout = "layoutDefault";
		public function index()
		{
			$conn = Connection::getDb();
			$product = new Product($conn);
			$products = $product->getProducts();
			$this->view->products = $products;
			$this->render("index",$this->layout);
		}
		public function sobreNos()
		{
			$conn = Connection::getDb();
			$product = new Product($conn);
			$products = $product->getProducts();
			$this->view->products = $products;
			$this->render("sobre_nos",$this->layout);
		}
	}
?>

