<?php
require_once 'model/User.php';
class UserController
{
	function list()
	{
		$user_obj= new User();
		$users = $user_obj->getAll();
		// var_dump($users);
		
		require_once 'view/user/list.php';
	}
	
}
?>