<?php 
	namespace App\Controllers;
	use MF\Controllers\Action;
	use App\Models\Product;
	use App\Models\Info;
	use MF\Models\Container;
	class IndexController extends Action
	{
		protected $layout = "layoutDefault";
		public function index()
		{
			$product = Container::getModel("Product");
			$products = $product->getProducts();
			$this->view->data = $products;
			$this->render("index",$this->layout);
		}
		public function sobreNos()
		{
			$info = Container::getModel("Info");
			$information = $info->getInfo();
			$this->view->data = $information;
			$this->render("sobre_nos",$this->layout);
		}
	}
?>

