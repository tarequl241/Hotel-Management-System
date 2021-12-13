<html>
<head>
	<title>Job circular</title>
</head>
<body>
	<form method="post" action="../controller/jobcheck.php">
		<fieldset>
			
			<table  width="100%" height="100%" border="0" cellpadding="5"
			background="../image/hiring.png">
			<tr>
				<td align="center">
					<legend><h1><font face="American Captain" size="10" color="Purple">We are hiring!</font></h1></legend>
			<table width="60%" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6">
				<tr>
					<td>First Name:</td>
                   
					<td><input type="text" name="fname" value=""></td>
				</tr>
                <tr>
					<td>Last Name:</td>
                   
					<td><input type="text" name="lname" value=""></td>
				</tr>
                <tr>
					<td>Age:</td>
                   
					<td><input type="text" name="age" value=""></td>
				</tr>
        <tr>
					<td>Position:</td>
                   
					<td><input type="text" name="position" value=""></td>
				</tr>
        <tr>
					<td>Experience Level:</td>
                   
					<td>

        <select name="experience">

          <option value="Entry Level">Entry Level</option>

          <option value="1-2 years Experience">1-2 years Experience</option>

          <option value="3-4 years Experience">3-4 years Experience</option>

         

        </select>

      </td>
				</tr>
        <tr>
					<td>Job type:</td>
                   
					<td><input type="text" name="type" value=""></td>
				</tr>
        <tr>
					<td>Marital Status:</td>
                   
					<td><input type="text" name="marriage" value=""></td>
				</tr>
        <td>Additional Comments:</td>
                   
					<td><input type="text" name="comments" value=""></td>
				</tr>
        <tr>
					<td>Mobile:</td>
                   
					<td><input type="text" name="mobile" value=""></td>
				</tr>
			
				<tr>
					<td>
					Please press Submit 
					</td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>

			</table>
            <center>
                <br><br>
						<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  
		
						</center>
		</fieldset>
		
	</form>
</body>
</html>