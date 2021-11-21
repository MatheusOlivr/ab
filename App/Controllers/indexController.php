<?php 
	namespace App\Controllers;
	use MF\Controllers\Action;
	use App\Connection;
	use App\Models\Product;
	use App\Models\Info;
	class IndexController extends Action
	{
		protected $layout = "layoutDefault";
		public function index()
		{
			$conn = Connection::getDb();
			$product = new Product($conn);
			$products = $product->getProducts();
			$this->view->data = $products;
			$this->render("index",$this->layout);
		}
		public function sobreNos()
		{
			$conn = Connection::getDb();
			$info = new Info($conn);
			$information = $info->getInfo();
			$this->view->data = $information;
			$this->render("sobre_nos",$this->layout);
		}
	}
?>

