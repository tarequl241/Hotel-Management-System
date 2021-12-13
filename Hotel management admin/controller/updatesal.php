<?php 

	require_once('../model/usersModel.php');

	// $username = $_REQUEST['name'];
	// $email = $_REQUEST['email'];
	$salary = $_REQUEST['salary'];
	$id = $_REQUEST['id'];

	$user = ['id'=>$id, 'salary'=>$salary];
	$status = editsal($user);

	if($status){
		header('location: ../views/salary.php');
	}else{
		header('location: ../views/editsal.php?id={$id}');
	}
?>