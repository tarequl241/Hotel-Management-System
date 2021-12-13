<?php 
	require_once('../Model/usersModel.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>User List</title>
	<style>

		table,td,th
		{
			border :1px solid #ddd;
			text-align:center;

		}
		table{
			border-collapse: collapse;
			width:100%
			

		}
		th, td{
			padding: 15px;
		}
		tr:hover{
			background-color: Blue;
		}

	</style>
</head>
<body>


<table  >
     
     	<tr bgcolor="Green" >
			<th ><font face="Lucida Sans Unicode" size="5" color="Black"> ID</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black"> User Name</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black"> Password</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black">Email</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black"> Action</font></th>
		</tr>
		
     

			<?php while($data = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['username']?></td>
					<td><?=$data['password']?></td>
					<td><?=$data['email']?></td>
					<td>
			
			<a href="delete.php?id=<?=$data['id']?>"> Delete </a>
			</td>
		</tr>
		

	<?php } ?>
	</table>
</body>
</html>
<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;|
		<a href="../controller/logout.php"><font face="Satisfy" size ="5" color="Black">Log Out</font> </a>&nbsp;
	</center>