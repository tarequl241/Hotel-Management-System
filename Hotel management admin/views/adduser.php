<html>
<head>
	<title>Add User</title>

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
		   Create Now !
		</div>
	
	
<form name="myForm" action="../controller/signupcheck.php" onsubmit="return validate()" method="post">
		
			<!-- <table  width="100%" height="100%" border="0" cellpadding="5"
			bgcolor="Orange">
			<tr>
				<td align="center">
					<legend><h1><font face="American Captain" size="10" color="Purple">Sign Up</font></h1></legend>
			<table width="400" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6"> -->
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
				
					<!-- <div class="field">
					<p><font color="Purple"><br>&nbsp;&nbsp;&nbsp;Status</font></p>
					
					  <input type="radio" name="estatus" value="employed" />Employed
					  <input type="radio" name="estatus" value="Unemployed" />Unemployed
					</div> -->
				  
					<div class="field">
						<br>
						<br>
						<br>
						<input type="submit" name="submit" value="Submit" style="position:relative; top:25px; left: 0%;">
						<br><br><br>
						<center>
						<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  || 
		<a href="logout.php"><font face="Satisfy" size ="5" color="Black">&nbsp; Log Out</font> </a>
						</center>
						</div>
					<br>
					<br>
					<br><br><br>
	
	</form>
</div>
</body>
</html>