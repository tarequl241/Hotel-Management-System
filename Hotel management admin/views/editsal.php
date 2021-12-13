<?php 
	
	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	//echo $id;
	$user = getsal($id);
	
?>

<html>
<head>
	<title>Edit Salary</title>
	<script type="text/javascript">

        function validate(){

           var name= document.forms["myForm"]["salary"].value;
		   

  if (salary == "") {

    alert("Salary must be filled out");

    return false;

  }

}

    </script>
</head>
<body>
	
	<form name="myForm" method="post" onsubmit="return validate()" action="../controller/updatesal.php">
		<fieldset>
			
			<table width="100%" height="100%" border="0" cellpadding="5"
			background="../image/new.jpg">
			<tr>
				<td align="center">
					<legend><h1><font face="American Captain" size= "10" color="Purple"> Edit Salary</font></h1></legend>
					<table width="400" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6">
			
				<tr>
					<td>Username:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>"readonly></td>
				</tr>
			
					<td>Email:</td>
					<td><input type="email" name="email" value="<?=$user['email']?>"readonly></td>
				</tr>
                <tr>
					<td>Salary:</td>
					<td><input type="text" name="salary" value="<?=$user['salary']?>"></td>
				</tr>
				<tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
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