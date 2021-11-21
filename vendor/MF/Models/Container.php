<?php 
	namespace MF\Models;
	use App\Connection;
	class Container
	{
		public static function getModel($model)
		{
			//recebe o model e a partir do model vai instânciar a conexao e exibir o modelo.
			$conn = Connection::getDb();
			$class = "\\App\Models\\".ucfirst($model);
			return new $class($conn);
		}
	}
?>