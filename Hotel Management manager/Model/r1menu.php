<?php 
	require_once('../Model/usersModel.php');
	$result = getr1menu();
	$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
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
<<table  >
     
	 <tr bgcolor="Green" >
		<th ><font face="Lucida Sans Unicode" size="5" color="Black">Indoor Shahi Restaurant</font></th>
		
	</tr>
	<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['menu']?></td>
		</tr>

	<?php } ?>
	</table>
</body>
</html>