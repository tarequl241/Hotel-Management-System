<?php 
    require_once('../Model/usersModel.php');
	$result = getAllUserstour_guide();
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
<table  >
     
	 <tr bgcolor="Green" >
		<th ><font face="Lucida Sans Unicode" size="5" color="Black"> ID</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Name</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Year of experience</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Coastal Area</font></th>
		<th><font face="Lucida Sans Unicode" size="5" color="Black">Phone</font></th>
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