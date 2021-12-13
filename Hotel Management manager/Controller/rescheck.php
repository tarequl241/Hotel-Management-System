<?php 
	//session_start();
	require_once('../Model/usersModel.php');

	if(isset($_POST['submit'])){
        $fname	= $_POST['fname'];
        $lname	= $_POST['lname'];
        $age	= $_POST['age'];
        $experience	= $_POST['experience'];
        $type	= $_POST['type'];
        $marriage	= $_POST['marriage'];
        $comments	= $_POST['comments'];
        $mobile	= $_POST['mobile'];
        

        if($fname != ""){
        if($lname != ""){
        if($age != ""){
            if($experience != ""){
            if($type != ""){
                if($marriage != ""){
                    if($comments != ""){
                    if($mobile != ""){

            $user = ['fname'=> $fname,'lname'=> $lname,'age'=> $age,'experience'=> $experience,'type'=> $type,'marriage'=> $marriage,'comments'=> $comments,'mobile'=> $mobile,];
					$status = addRes($user);

					if($status){
						header('location: ../Views/home.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
            }
         }
        }
    }}}}
        ?>