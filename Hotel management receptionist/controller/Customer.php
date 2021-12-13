<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT User,Name,Gender,DOB,Father,Mother,Present,Permanent,Mobile,Email,Password FROM check1 WHERE User,Name = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT User,Name,Gender,DOB,Father,Mother,Present,Permanent,Mobile,Email,Password FROM check1";
	}
	$conn = new mysqli("localhost", "root", "", "check");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);
		if($result -> num_rows > 0) {
			echo "<br>";
			while($row = $result -> fetch_assoc()) {
				echo "<br>";
				echo $row["User"] . " " . $row["Name"] . " " . $row["DOB"] . " ". $row["Father"] . " ". $row["Mother"]. " ". $row["Present"]. " ". $row["Permanent"]. " ". $row["Mobile"]. " ". $row["Email"];
				echo "</br>";
			}
			echo "</br>";
		}
		else {
			echo "No record found!";
		}
	}
	$conn -> close();
}
?>