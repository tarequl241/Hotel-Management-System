<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserId = $_POST["UserId"];
    $Name = $_POST["Name"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $BookingDate = $_POST["BookingDate"];
    $MeetingDate = $_POST["MeetingDate"];
    $RoomNo = $_POST["RoomNo"];
    
    if(empty($UserId)|| empty($Name)|| empty($PhoneNumber)|| empty($BookingDate)|| empty($MeetingDate)|| empty($RoomNo)) {
        echo "Fill up the form properly";
    }
    else {
        $conn = new mysqli("localhost", "root", "", "check");
        if($conn -> connect_error) {
            echo "Failed to connect database!";
        }
        else {
            $stmt = $conn -> prepare("INSERT INTO Meeting(UserId,Name,PhoneNumber,BookingDate,MeetingDate,RoomNo) VALUES(?,?,?,?,?,?)");
            $stmt -> bind_param("ssssss", $UserId,$Name,$PhoneNumber,$BookingDate,$MeetingDate,$RoomNo);
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
    $sql = "SELECT UserId,Name,PhoneNumber,PhoneNumber,BookingDate,MeetingDate,RoomNo FROM Meeting WHERE UserId = " . $searchKey;

    if(empty($searchKey)) {
        $sql = "SELECT UserId,Name,PhoneNumber,BookingDate,MeetingDate,RoomNo FROM Meeting";
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
                echo $row["UserId"] . " " . $row["Name"] . " " . $row["PhoneNumber"] . " ". $row["BookingDate"] . " ". $row["MeetingDate"]. " ". $row["RoomNo"];
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