<?php 
	require_once('../Model/usersModel.php');
	$result = getAllRoom();
	$count = mysqli_num_rows($result);

	/*for($i=1; $i<=$count; $i++){
		$data = mysqli_fetch_assoc($result);
		print_r($data);
		echo "<br>";
	}*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>

	

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Details of room</th>
			<th>Number of Beds</th>
			<th>Available on Date</th>
			
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