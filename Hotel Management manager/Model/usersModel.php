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
	function getAllUserstour_guide(){
		$con = getConnection();
		$sql = "select * from tour_guide";
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
	

	function editUser($user){
		$con = getConnection();
		$sql = "update log_in set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
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