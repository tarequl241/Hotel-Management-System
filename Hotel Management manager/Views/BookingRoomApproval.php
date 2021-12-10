<?php 
	require_once('../Model/usersModel.php');
	$result = getAllBookedRoom();
	$count = mysqli_num_rows($result);

?><!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Booked Rooms</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Room Details</td>
    <td>Number of beds</td>
    <td>Booked Till</td>
    <td>Images</td>
  </tr>
  <?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['Room_det']?></td>
			<td><?=$data['noof_bed']?></td>
			<td><?=$data['Date_book']?></td>
            <td><img src="<?=$data['image']?>"></td>
		</tr>

	<?php } ?>
	</table>

</body>
</html>