<?php
include_once 'model/Category.php';
	class categoryController
	{
		
		public function list(){
			// echo 'Hiển thị';
			$category_1 = new Category();
			$categories = $category_1->getAll();
			// 
			require_once 'view/category/list.php';

		}
		public function create()
		{

			require_once 'view/category/create.php';
		}

		public function store($data)
		{
			$model = new Category();
			$categories = $model->addCategory($data);

			header ('location: ?mod=category&act=list');
		}

		public function show($id)
		{
			$model = new Category();
			$categories = $model->find($id);

			require_once'view/category/detail.php';
		}

		// function detail()
		// {
		// 	$id = $_GET['id'];
		// 	$row = new Category();
		// 	$categories = $row->find($id);
		// 	// echo 'Thành công';
		// 	require_once 'view/category/detail.php';
		// }
	}

?>