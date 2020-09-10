<?php
	require_once 'model/Model.php';
	class Post extends Model
	{
		var $table = 'posts';
		function getAll(){
			return $this->select($this->table);
		}

		public function addPosts($data)
		{
			return $this->insert($this->table,$data);
		}
	}
?>