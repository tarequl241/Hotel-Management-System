<?php 
	require_once('../Model/usersModel.php');

	$id = $_REQUEST['id'];
	$user = getUserById($id);

?>

<html>
<head>
	<title>delete user</title>
	
</head>

<body>
	
	<form method="post" action="../Controller/deleteUser.php">
	
	<table width="100%" height="100%" border="0" cellpadding="5"
			background="../image/new.jpg">
			<tr>
				<td align="center">
					<legend><h1><font face="American Captain" size= "10" color="Purple">Delete User</font></h1></legend>
					<table width="400" bordercolor="Green" border="4" cellspacing="4" cellpadding="6">
			
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
					<td><input type="submit" name="submit" value="delete"></td>
				</tr>
					</table>
					<br><br><br>
			<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp; |
		<a href="../controller/logout.php"><font face="Satisfy" size ="5" color="Black">Log Out</font> </a>&nbsp;
	</center>
			</table>
		</fieldset>
	</form>
	
</body>
</html>

