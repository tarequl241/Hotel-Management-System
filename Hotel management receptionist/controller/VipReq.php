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
            $stmt = $conn -> prepare("INSERT INTO vip(UserId,Req) VALUES(?,?)");
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
    $sql = "SELECT UserId,Req FROM vip WHERE UserId = " . $searchKey;

    if(empty($searchKey)) {
        $sql = "SELECT UserId,Req FROM vip";
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
                echo $row["UserId"] . " " . $row["Req"] ;
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