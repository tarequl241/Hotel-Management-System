<?php 
	require_once('../Model/usersModel.php');
	$result = getAllRoomBalcony();
	$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>roomWithBalcony</title>
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
		<th ><font face="Lucida Sans Unicode" size="5" color="Black"> ID</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black"> Room Details</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">No. Of Bed</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Date of availability</font></th>
	</tr>
	<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['Room_det']?></td>
			<td><?=$data['noof_bed']?></td>
			<td><?=$data['Date_available']?></td>
		</tr>

	<?php } ?>
	</table>
</body>
</html>