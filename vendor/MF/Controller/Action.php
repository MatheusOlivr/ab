<?php 
	namespace MF\Controller;
	abstract class Action
	{
		protected $view;
		public function __construct()
		{
			$this->view = new \stdClass();
		}
		protected function render($view)
		{
			$getClass = get_class($this);
			$getClass = str_replace("App\\Controllers\\","",$getClass);
			$getClass = str_replace("Controller","",$getClass);
			require_once("../App/Views/".$getClass.DIRECTORY_SEPARATOR.$view.".phtml");
		}
	}
?>