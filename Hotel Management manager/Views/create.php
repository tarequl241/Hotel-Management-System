<!DOCTYPE html>
<html>
<head>
	<title>Create New</title>
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
	<link rel="stylesheet" href="signup.css">
</head>
<body>
	<div class="wrapper">
	<div class="title">
	   Create New
	</div>
	<form name="myForm" action="../Controller/signupcheck.php" onsubmit="return validate()" method="post">
		<div class="field">
			<p><font color="Purple">&nbsp;&nbsp;&nbsp;User Name</font></p>
		<label></label>
			<input type="text" name="username">
		</div>
		<div class="field">
			<p><font color="Purple"><br>&nbsp;&nbsp;&nbsp;Password</font></p>
			<label></label>
			<input type="password" name="password" >
		</div>
		<br>
		<div class="field">
			
			<p><font color="Purple"><br>&nbsp;&nbsp;&nbsp;Email</font></p>
			<label></label>
			<input type="email" name="email" >
		</div>
			<div class="field">
				<br>
				<br>
				<br>
				<input type="submit" name="submit" value="Submit" style="position:relative; top:25px; left: 0%;">
				
				<br><br><br>
				<center>
				<a href="login.html">Log in</a>
			</center>
			
			</div>
			<br>
			<br>
			<br><br><br>
			
</form>
</div>
</body>

</html>
