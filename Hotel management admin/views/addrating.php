<html>
<head>
	<title>Add rating</title>
</head>
<body>
	<form method="post" action="../controller/ratingcheck.php">
		<fieldset>
			
			<table  width="100%" height="100%" border="0" cellpadding="5"
			background="../image/rating.jpg">
			<tr>
				<td align="center">
					<legend><h1><font face="American Captain" size="10" color="Purple">Add your Rating</font></h1></legend>
			<table width="40%" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6">
				<tr>
					<td>Name:</td>
                   
					<td><input type="text" name="name" value=""></td>
				</tr>
                <tr>
					<td>Rating:</td>
                   
					<td><input type="number" name="rating" value=""></td>
				</tr>
                <tr>
					<td>Comment:</td>
                   
					<td><input type="text" name="comment" value=""></td>
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