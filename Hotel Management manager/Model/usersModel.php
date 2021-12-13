<?php



    require_once('db.php');



    function validate($username, $password){

        $con = getConnection();

        $sql = "select * from log_in where username='{$username}' and password='{$password}'";

        $result = mysqli_query($con, $sql);

        $data = mysqli_fetch_assoc($result);
        if($data!=null)

        {
        return true;
        }

        else

        {
        return false;
        }
    }
    function addUser($user)
    {
        $con = getConnection();
		$sql = "insert into log_in values('','{$user['username']}','{$user['password']}','{$user['email']}','{$user['type']}')";
		if( mysqli_query($con, $sql)){
            return true;
		}else{
			return false;
		}
	}

	function addDis($user)
    {
        $con = getConnection();
		$sql = "insert into discount values('','{$user['name']}','{$user['amount']}')";
		if( mysqli_query($con, $sql)){
            return true;
		}else{
			return false;
		}
	}
	function addRes($user){

        $con = getConnection();

        $sql = "insert into receptionist values('', '{$user['fname']}','{$user['lname']}', '{$user['age']}','{$user['experience']}','{$user['type']}','{$user['marriage']}','{$user['comments']}','{$user['mobile']}')";
       if(mysqli_query($con, $sql)){

            return true;

        }else{

            return false;

        }

    }
	

	function getAllUserstour_guide(){
		$con = getConnection();
		$sql = "select * from tour_guide";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getAllDis(){
		$con = getConnection();
		$sql = "select * from discount";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getAllpayment(){
		$con = getConnection();
		$sql = "select * from payment";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from log_in";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getAllRoom(){
		$con = getConnection();
		$sql = "select * from room_available";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getphoto(){
		$con = getConnection();
		$sql = "select * from wedding";
		$result = mysqli_query($con, $sql);
		return $result;
	}
	function getr1menu(){
		$con = getConnection();
		$sql = "select * from r1";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAllBookedRoom(){
		$con = getConnection();
		$sql = "select * from booked_room";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getAllRoomBalcony(){
		$con = getConnection();
		$sql = "select * from room_balcony";
		$result = mysqli_query($con, $sql);
		return $result;
	}	


	function getUserById($id){
		$con = getConnection();
		$sql = "select * from log_in where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}
	function getpayment($id){
		$con = getConnection();
		$sql = "select * from payment where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}
	

	function editUser($user){
		$con = getConnection();
		$sql = "update log_in set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function editpayment($user){
		$con = getConnection();
		$sql = "update payment set paid='{$user['paid']}' where id={$user['id']}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from log_in where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>