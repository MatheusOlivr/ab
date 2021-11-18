<?php
	require "../vendor/autoload.php";
	use App\Route;
	$route = new Route;
	print_r($route->getUrl());
	echo "Isso está funcionando";
?>