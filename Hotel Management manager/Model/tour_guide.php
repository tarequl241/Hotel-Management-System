<?php 
	//session_start();
	//if(isset($_COOKIE['flag'])){
    require_once('../Model/usersModel.php');
	$result = getAllUserstour_guide();
	$count = mysqli_num_rows($result);

	/*for($i=1; $i<=$count; $i++){
		$data = mysqli_fetch_assoc($result);
		print_r($data);
		echo "<br>";
	}*/
?>
<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>experience</th>
			<th>coastal_area</th>
			<th>PHONE</th>
		</tr>
<?php while($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
			<td><?=$data['id']?></td>
			<td><?=$data['username']?></td>
			<td><?=$data['experience']?></td>
			<td><?=$data['coastal_area']?></td>
      <td><?=$data['phone']?></td>
		</tr>

	<?php } ?>