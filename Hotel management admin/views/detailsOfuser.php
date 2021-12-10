<?php 
	require_once('../model/usersModel.php');
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
			background-color: cyan;
		}

	</style>
</head>
<body>


<table  >
     
     	<tr bgcolor="Orange" >
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
			<a href="edit.php?id=<?=$data['id']?>"> EDIT </a> 
			
			</td>
		</tr>
		

	<?php } ?>
	</table>
</body>
</html>
<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Blue">Back</font> </a>&nbsp;|
		<a href="../controller/logout.php"><font face="Satisfy" size ="5" color="Blue">Log Out</font> </a>&nbsp;
	</center>