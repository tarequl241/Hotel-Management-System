<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
        $name	= $_POST['name'];
        $mobile	= $_POST['mobile'];
        $message = $_POST['message'];
        

        if($name != ""){
        if($mobile != ""){
        if($message != ""){

            $user = ['name'=> $name,'mobile'=> $mobile,'message'=> $message,];
					$status = addinfo($user);

					if($status){
						header('location: ../views/thankyou.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
            }
         }
        ?>