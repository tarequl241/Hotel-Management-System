<?php 

	require_once('../Model/usersModel.php');

	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$id = $_REQUEST['id'];

	$user = ['id'=>$id, 'username'=> $username, 'password'=>$password, 'email'=>$email];
	$status = deleteUser($id);

	if($status){
		header('location: ../Views/RemoveReceptionist.php');
	}else{
		header('location: ../Views/delete.php?id={$id}');
	}
?>