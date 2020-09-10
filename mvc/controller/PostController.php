<?php
require_once 'model/Post.php';
	class PostController

	{
		function list(){
			$post_1 = new Post();
			$posts= $post_1->getAll();
			// var_dump($post);
			require_once 'view/post/list.php';
		}
		public function create()
		{
			require_once 'view/post/create.php';
		}
		public function store($data)
		{
			// $data = $_POST;
			$model = new Post();
			$posts = $model->addPost($data);
			require_once 'view/post/list.php';
		}


	}
	

?>