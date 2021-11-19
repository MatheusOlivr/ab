<?php 
	namespace MF\Init;
	abstract class Bootstrap
	{
		public function __construct()
		{
			$this->initRoutes();
			$this->run($this->getUrl());
		}
		protected function getUrl()
		{
			return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
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