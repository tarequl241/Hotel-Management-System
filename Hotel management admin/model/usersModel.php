<?php 

	require_once('db.php');

	function validate($username, $password){
		$con = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);

		if($data != null){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function addinfo($user){
		$con = getConnection();
		$sql = "insert into info values('', '{$user['name']}','{$user['mobile']}', '{$user['message']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function addjob($user){
		$con = getConnection();
		$sql = "insert into job values('', '{$user['fname']}','{$user['lname']}', '{$user['age']}','{$user['position']}','{$user['experience']}','{$user['type']}','{$user['marriage']}','{$user['comments']}','{$user['mobile']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function addNotice($id){
		$con = getConnection();
		$sql = "insert into notice values('', '{$id['notice']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function addRating($id){
		$con = getConnection();
		$sql = "insert into rate values('', '{$id['name']}', '{$id['rating']}','{$id['comment']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getAllManager(){
		$con = getConnection();
		$sql = "select * from manager";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getAllNotice(){
		$con = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getAllRatings(){
		$con = getConnection();
		$sql = "select * from rate";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getAllInfo(){
		$con = getConnection();
		$sql = "select * from info";
		$result = mysqli_query($con, $sql);
		return $result;
	}	
	function getAllSalary(){
		$con = getConnection();
		$sql = "select * from salary";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getaboutus(){
		$con = getConnection();
		$sql = "select * from about";
		$result = mysqli_query($con, $sql);
		return $result;
	}	

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}
	function getsal($id){
		$con = getConnection();
		$sql = "select * from salary where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result); 
		return $data;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function editsal($user){
		$con = getConnection();
		$sql = "update salary set salary='{$user['salary']}' where id={$user['id']}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from users where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>