<?php 
	require_once('../Model/usersModel.php');
	$result = getAllpayment();
	$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Payment History</title>
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
		<th ><font face="Lucida Sans Unicode" size="5" color="Black">Name</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Room Name</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Payable Amount</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Paid Amount</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Check-out Date</font></th>
        <th><font face="Lucida Sans Unicode" size="5" color="Black">Action</font></th>
	</tr>
	<?php while($data = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?=$data['name']?></td>
					<td><?=$data['room_name']?></td>
					<td><?=$data['payable']?></td>
					<td><?=$data['paid']?></td>
                    <td><?=$data['checkout']?></td>
					<td>
			<a href="editpayment.php?id=<?=$data['id']?>"> EDIT </a> 
			
			</td>
		</tr>
		<?php } ?>

	
	</table>
</body>
</html>
<center>
		<a href="home.php">Back </a> |
		<a href="../Controller/logout.php">logout </a>
	</center>