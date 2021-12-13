<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
        $notice	= $_POST['notice'];

        if($notice != ""){

            $id = ['notice'=> $notice];
					$status = addNotice($id);

					if($status){
						header('location: ../views/notice.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
         ?>