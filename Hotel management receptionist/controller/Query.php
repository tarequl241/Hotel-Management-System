<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserId = $_POST["UserId"];
    $Complain = $_POST["complain"];
    
    if(empty($UserId)|| empty($Complain)) {
        echo "Fill up the form properly";
    }
    else {
        $conn = new mysqli("localhost", "root", "", "check");
        if($conn -> connect_error) {
            echo "Failed to connect database!";
        }
        else {
            $stmt = $conn -> prepare("INSERT INTO query(UserId,Ques) VALUES(?,?)");
            $stmt -> bind_param("ss", $UserId,$Complain);
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
    $sql = "SELECT UserId,Ques FROM query WHERE UserId = " . $searchKey;

    if(empty($searchKey)) {
        $sql = "SELECT UserId,Ques FROM query";
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
                echo $row["UserId"] . " " . $row["Ques"] ;
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