<?php
	namespace App;
	use MF\Init\Bootstrap;
	class Route extends Bootstrap
	{
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