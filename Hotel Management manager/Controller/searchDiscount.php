<?php

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT name FROM discount WHERE id = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT name FROM discount";
	}
	$conn = new mysqli("localhost", "root", "", "web_tech");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);
		if($result -> num_rows > 0) {
			echo "<br>";
			while($row = $result -> fetch_assoc()) {
				echo "<br>";
				echo $row["name"] ;
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