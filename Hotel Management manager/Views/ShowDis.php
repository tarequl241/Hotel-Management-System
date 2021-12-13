<?php 
	require_once('../Model/usersModel.php');
	$result = getAllDis();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Discount</title>
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
     
     	<tr bgcolor="Green" >
			<th ><font face="Lucida Sans Unicode" size="5" color="Black">Serial</font></th>
			<th><font face="Lucida Sans Unicode" size="5" color="Black">Name</font></th>
            <th ><font face="Lucida Sans Unicode" size="5" color="Black">Discount amount</font></th>
			
		</tr>
		
     

			<?php while($data = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['name']?></td>
                    <td><?=$data['amount']?></td>

		</tr>
		

	<?php } ?>
	</table>
    <center>
						<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  || 
		<a href="logout.php"><font face="Satisfy" size ="5" color="Black">&nbsp; Log Out</font> </a>
						</center>
</body>
</html>