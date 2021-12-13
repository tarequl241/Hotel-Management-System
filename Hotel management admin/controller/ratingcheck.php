<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
        $name	= $_POST['name'];
        $rate	= $_POST['rating'];
        $comment = $_POST['comment'];
        

        if($name != ""){
        if($rate != ""){
        if($comment != ""){

            $id = ['name'=> $name,'rating'=> $rate,'comment'=> $comment,];
					$status = addRating($id);

					if($status){
						header('location: ../views/ratings.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
            }
         }
        ?>