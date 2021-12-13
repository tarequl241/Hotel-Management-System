<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
        $fname	= $_POST['fname'];
        $lname	= $_POST['lname'];
        $age	= $_POST['age'];
        $position	= $_POST['position'];
        $experience	= $_POST['experience'];
        $type	= $_POST['type'];
        $marriage	= $_POST['marriage'];
        $comments	= $_POST['comments'];
        $mobile	= $_POST['mobile'];
        

        if($fname != ""){
        if($lname != ""){
        if($age != ""){
            if($position != ""){
            if($experience != ""){
            if($type != ""){
                if($marriage != ""){
                    if($comments != ""){
                    if($mobile != ""){

            $user = ['fname'=> $fname,'lname'=> $lname,'age'=> $age,'position'=> $position,'experience'=> $experience,'type'=> $type,'marriage'=> $marriage,'comments'=> $comments,'mobile'=> $mobile,];
					$status = addjob($user);

					if($status){
						header('location: ../views/home.php');
						}
						else{
							echo "try again...";
						}
                    }
                }
            }
         }
        }
    }}}}}
        ?>