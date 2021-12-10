<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		//$estatus   = $_post['estatus'];
		//$estatus   = $_post['estatus'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

					$user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'type'=>'user'];
					$status = addUser($user);

					if($status){
						header('location: ../views/login.html');
						}
						else{
							echo "try again...";
						}
				
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>