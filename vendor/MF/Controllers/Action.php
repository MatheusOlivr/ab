<?php 
	namespace MF\Controllers;
	abstract class Action
	{
		protected $view;
		public function __construct()
		{
			$this->view = new \stdClass();
		}
		public function render($view,$layout)
		{
			$this->view->page = $view;
			$filenameLayout = "../App/Views/".$layout.".phtml";
			if(file_exists($filenameLayout))
			{
				require_once($filenameLayout);
			}
			else
			{
				$this->content();
			}
		}
		protected function content()
		{
			$getClass = get_class($this);
			$getClass = str_replace("App\\Controllers\\","",$getClass);
			$getClass = str_replace("Controller","",$getClass);
			require_once("../App/Views/".$getClass.DIRECTORY_SEPARATOR.$this->view->page.".phtml");
		}
	}
?>