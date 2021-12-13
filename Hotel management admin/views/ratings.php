<?php 
	require_once('../model/usersModel.php');
	$result = getAllRatings();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Ratings</title>
	<style>

		table,td,th
		{
			border :1px solid #ddd;
			text-align:center;

		}
		table{
			border-collapse: collapse;
            
			width:60%
			

		}
		th, td{
			padding: 15px;
		}
		tr:hover{
			background-color: lightskyblue;
		}

	</style>
</head>
<body>


<table  align="center">
     
     	<tr bgcolor="Orange" >
			<th ><font face="Lucida Sans Unicode" size="5" color="Black"> ID</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black">Name</font></th>
            <th ><font face="Lucida Sans Unicode" size="5" color="Black">Rating</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black">Comment</font></th>
			
		</tr>
		
     

			<?php while($data = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['name']?></td>
                    <td><?=$data['rating']?></td>
					<td><?=$data['comment']?></td>

		</tr>
		

	<?php } ?>
	</table>
    <center>
						<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  || 
		<a href="logout.php"><font face="Satisfy" size ="5" color="Black">&nbsp; Log Out</font> </a>
						</center>
</body>
</html>