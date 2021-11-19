<?php 
	namespace App;
	class Route
	{
		private $routes;
		public function __construct()
		{
			$this->initRoutes();
			$this->run($this->getUrl());
		}
		protected function getUrl()
		{
			return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
		}
		protected function initRoutes()
		{
			$routes =
			[
				"home" =>	
				[ 			
					"route" => "/",
					"controller" => "indexController",
					"action" => "index"
				],
				"sobre_nos" =>
				[
					"route" => "/sobre_nos",
					"controller" => "indexController",
					"action" => "sobre_nos"
				]
			];
			$this->setRoutes($routes);
		}
		protected function getRoutes()
		{
			return $this->routes;
		}
		protected function setRoutes($routes)
		{
			$this->routes = $routes;
		}
		protected function run($url)
		{
			foreach($this->routes as $key => $route)
			{
				if($route["route"] == $url)
				{
					$class = "App\\Controllers\\".ucfirst($route["controller"]);
					$controller = new $class;
					$action = $route["action"];
					$controller->$action();				
				}
			}
		}
	}
?>
<!-- 
				foreach($this->getRoutes() as $path => $route)
			{
				if($url == $route["route"])
				{
					$class = "App\\Controllers\\".ucfirst($route["controller"]);
					$controller = new $class;
					$action = $route["action"];
					$controller->$action();
				}
			}
	namespace MF\Init;
	abstract class Bootstrap
	{
		private $routes;
		abstract protected function initRoutes();
		public function __construct()
		{
			$this->initRoutes();
			$this->run($this->getUrl());
		}
		public function getRoutes()
		{
			return $this->routes;
		}
		public function setRoutes($routes)
		{
			$this->routes = $routes;
		}
		protected function run($url)
		{
			foreach($this->getRoutes() as $path => $route)
			{
				if($url == $route["route"])
				{
					$class = "App\\Controllers\\".ucfirst($route["controller"]);
					$controller = new $class;
					$action = $route["action"];
					$controller->$action();
				}
			}
		}
		protected function getUrl()
		{
			
		}
	}
?>
	namespace App;
	use MF\Init\Bootstrap;
			$this->setRoutes($routes);
		}
	}

initRoutes - encaminha um controlador e um arquivo para uma rota

getUrl - Pega o caminho que está sendo acessado naquela url
-->