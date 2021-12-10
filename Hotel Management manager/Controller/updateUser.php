<?php 

	require_once('../Model/usersModel.php');

	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$id = $_REQUEST['id'];

	$user = ['id'=>$id, 'username'=> $username, 'password'=>$password, 'email'=>$email];
	$status = editUser($user);

	if($status){
		header('location: ../Views/UserInformation.php');
	}else{
		header('location: ../Views/edit.php?id={$id}');
	}
?>