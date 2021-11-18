<?php 
	namespace App;
	class Route
	{
		public function initRoutes()
		{
			$routes["home"] = array(
				"route" => "/",
				"controller" => "indexController",
				"action" => "index"
			);
			$routes["sobre_nos"] = array(
				"route" => "/sobre_nos",
				"controller" => "indexController",
				"action" => "sobre_nos"
			);
		}
		public function getUrl()
		{
			return parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
		}
	}
?>
<!-- 
initRoutes - encaminha um controlador e um arquivo para uma rota

getUrl - Pega o caminho que está sendo acessado naquela url
-->