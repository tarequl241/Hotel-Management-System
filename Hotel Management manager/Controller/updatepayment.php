<?php 

	require_once('../Model/usersModel.php');

	//$username = $_REQUEST['username'];
	//$email = $_REQUEST['email'];
	$paid = $_REQUEST['paid'];
	$id = $_REQUEST['id'];

	$user = ['id'=>$id, 'paid'=> $paid];
	$status = editpayment($user);

	if($status){
		header('location: ../Views/paymenthistory.php');
	}else{
		header('location: ../Views/editpayment.php?id={$id}');
	}
?>