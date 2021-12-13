<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$UserId = $_POST["UserId"];
	$Name = $_POST["Name"];
	$PhoneNumber = $_POST["PhoneNumber"];
	$CheckIn = $_POST["CheckIn"];
	$CheckOut = $_POST["CheckOut"];
 	
 	if(empty($UserId)|| empty($Name)|| empty($PhoneNumber)|| empty($CheckIn)|| empty($CheckOut)) {
		echo "Fill up the form properly";
	}
	else {
		$conn = new mysqli("localhost", "root", "", "check");
		if($conn -> connect_error) {
			echo "Failed to connect database!";
		}
		else {
			$stmt = $conn -> prepare("INSERT INTO checkinout(UserId,Name,PhoneNumber,CheckIn,CheckOut) VALUES(?,?,?,?,?)");
			$stmt -> bind_param("sssss", $UserId,$Name,$PhoneNumber,$CheckIn,$CheckOut);
			$status = $stmt -> execute();

			if($status) {
				echo "Successfully saved!";
			}
			else {
				echo "Failed to save data!";
			}
			$conn -> close();
		}
	}
}

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT UserId,Name,PhoneNumber,PhoneNumber,CheckIn,CheckOut FROM checkinout WHERE UserId = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT UserId,Name,PhoneNumber,CheckIn,CheckOut FROM checkinout";
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
				echo $row["UserId"] . " " . $row["Name"] . " " . $row["PhoneNumber"] . " ". $row["CheckIn"] . " ". $row["CheckOut"];
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