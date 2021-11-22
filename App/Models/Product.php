<?php 
	namespace App\Models;
	use MF\Models\Model;
	class Product extends Model
	{
		public function getProducts()
		{
			$query = "SELECT id,descricao,preco FROM tb_produtos";
			return $this->db->query($query)->fetchAll();
		}
	}
?>