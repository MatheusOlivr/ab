<?php 
	namespace App;
	use MF\Init\Bootstrap;
	class Route extends Bootstrap
	{
		protected function initRoutes()
		{
			$routes["home"] = array(
				"route" => "/",
				"controller" => "indexController",
				"action" => "index"
			);
			$routes["sobre_nos"] = array(
				"route" => "/sobre_nos",
				"controller" => "indexController",
				"action" => "sobreNos"
			);
			$this->setRoutes($routes);
		}
	}
?>
<!-- 
initRoutes - encaminha um controlador e um arquivo para uma rota

getUrl - Pega o caminho que está sendo acessado naquela url
-->