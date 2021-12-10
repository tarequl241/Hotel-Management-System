<?php 
	
	require_once('../Model/usersModel.php');

	$id = $_REQUEST['id'];
	//echo $id;
	$user = getUserById($id);
	//print_r($user);
?>

<html>
<head>
	<title>Edit user</title>
	<script type="text/javascript">

function validate(){

   var name= document.forms["myForm"]["username"].value;
   

if (name == "") {

alert("Name must be filled out");

return false;

}
var password= document.forms["myForm"]["password"].value;
   

   if (password == "") {
 
	 alert("password must be filled out");
 
	 return false;
 
   }
   var email= document.forms["myForm"]["email"].value;
   

   if (email == "") {
 
	 alert("Email must be filled out");
 
	 return false;
 
   }

}

</script>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../Controller/logout.php">logout </a>
	</center>
	
	<form name="myForm" method="post" onsubmit="return validate()" action="../Controller/updateUser.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>