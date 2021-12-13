<?php 
	//session_start();
	require_once('../Model/usersModel.php');

	if(isset($_POST['submit'])){
        $name	= $_POST['name'];
        $amount	= $_POST['amount'];
        
        

        if($name != ""){
        if($amount != ""){
            $user = ['name'=> $name,'amount'=> $amount];
					$status = addDis($user);

					if($status){
						header('location: ../Views/ShowDis.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
            }
         
        ?>