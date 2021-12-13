<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<table width="100%" height="80" border="0" cellpadding="5"
		background="../image/new.jpg">
		<tr>
			<td align="center">
			<table width="50%" border="0" align="center" cellpadding="1"
				cellspacing="1">
				<td align="left"><font face="Lucida Sans Unicode" color="White"><a href="aboutus.php"><b><p style="font-size:18px">About Us</p></b></a> </font></td>

				<td align="center"><font face="Lucida Sans Unicode" color="White"><a href="contact.php"><b><p style="font-size:18px">Contact Us</p></b></a> </font></td>

				
				<td align="center"><font face="Lucida Sans Unicode" color="White"><a href="../views/search.html"><b><p style="font-size:18px">Search</p></b></a> </font></td>
				<td align="right"><font face="Lucida Sans Unicode" color="White"><a href="../controller/logout.php"><b><p style="font-size:18px">Log out</p></b></a> </font></td>
			</table>



	</table>
	
	<table width="100%" height="350" border="1" cellspacing="1" cellpadding="1"
	background="../image/adminthree.png">
		<tr>
			<td align="center">
				<table width ="90%" border="0" cellspacing="4" cellpadding="2">
					<tr>
						<td width ="338" align="left"><font face ="American Captain" color="Black" size="5"><a href="adduser.php">Add new users</a>
						<br/>
						<a href="deleteaccount.php">Delete Users</a>
						<br/>
						<a href="detailsOfUser.php">View</a>
						<br/>
						<a href="notice.php">Notice</a>
						<br/>
						<a href="addnotice.php">addnotice</a>
						<br/>
						
						<a href="jobcircular.php">Job Circular</a>
						


						</font></td>

					
						<td width ="338" align="Right"><font face ="American Captain" color="Black" size="5"><a href="socials.php">Socials</a>
						<br/>
						<a href="salary.php">Salary</a>
						<br/>
						<a href="manager.php">Manager</a>
						<br/>
						<a href="financereport.php">Finance and Report</a>
						<br/>
						<!-- <a href="approval.php">Approval</a>
						<br/> -->
						
						<a href="ratings.php">Ratings</a>
						<br/>
						<a href="addrating.php">Add Ratings</a>
						</font></td>	


						
					</tr>
				</table>
			</td>	
		</tr>
	</table>

	<video width="100%" height="20%" autoplay loop>
    <source src= "../image/video2.mp4" type="video/mp4">
    Your browser does not support the video tag.
	</video>
	<table width="100%" height="100" border="0" cellspacing="1" cellpadding="1">
                <tr>
                    <td height="72" align="center" valign="top"> 
                        <table width="100%" border="0" cellspacing="1" cellpadding="1"background="../image/new.jpg">
                            <tr>
                                <td width="100%" align="center"><font face="Lucida Sans Unicode" color="black" size="4">Book your rooms now <br/>
                                We are Hotel Green View , one of the most iconic hotels in Chittagong. We have several facilities such as Spa, Swiming pool, well quiped gym <br/>
                                Specias ball room,luxurious dining area, bilingual receptionist and many more !<br/>
                                You are most welcome<br/>
                                Hotel Green View<br/>
                                </font></td>
                            </tr>
                        </table>
                    </td>

                </tr>
            
</body>
</html>

<?php
	}else{
		header('location: ../views/login.html');
	}
?>
