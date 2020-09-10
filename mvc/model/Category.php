<?php
require_once 'model/Model.php';
	class Category extends Model
	{	
		
		var $table = 'categories';
		public function getAll(){
			return $this->select($this->table);
		} 
		function find($id)
		{
			$query = "SELECT * FROM categories WHERE id=".$id;
			$result = $this->conn->query($query);
			$row = $result->fetch_assoc();
			return $row;
		}
		
		public function addCategory($data){
			return $this->insert($this->table,$data);
		}
		// // public function deleteCategory($table,$data)
		// // 
		// // 	return $this->insert($this->table);
		// // }


	}

?>