<?php 
	namespace MF\Controller;
	abstract class Action
	{
		protected $view;
		public function __construct()
		{
			$this->view = new \stdClass();
		}
		protected function render($view,$layout)
		{
			$filenameLayout = "../App/views/".$layout.".phtml";
			$this->view->page = $view;
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