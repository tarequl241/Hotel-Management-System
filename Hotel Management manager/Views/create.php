<html>
<head>
	<title>Create New User Page</title>
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
	
<form name="myForm" action="../Controller/signupcheck.php" onsubmit="return validate()" method="post">
		<fieldset>
			<legend><h1><font face="Algerian" size="10" color="green">Create New</font></h1></legend>
			<table width="600" bordercolor="green" border="4" cellspacing="4" cellpadding="6">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" ></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" ></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Emplyment Status</td>
					<td>
					  <input type="radio" name="estatus" value="employed" />Employed
					  <input type="radio" name="estatus" value="Unemployed" />Unemployed
					</td>
				  </tr>
				<tr>
					<td>
						Please press Submit 
					</td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  || 
		<a href="logout.php"><font face="Satisfy" size ="5" color="Black">&nbsp; Log Out</font> </a>
	</center>
	
</body>
</html>