<?php 
	namespace App\Models;
	class Info
	{
		public function __construct(\PDO $db)
		{
			$this->db = $db;
		}
		public function getInfo()
		{
			$query = "SELECT id,titulo,descricao FROM tb_info";
			return $this->db->query($query)->fetchAll();
		}
	}
?>