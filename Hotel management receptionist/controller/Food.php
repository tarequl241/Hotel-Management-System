<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $UserName = $_POST['username'];
    $FoodType = $_POST['Type'];

    $conn = new mysqli("localhost", "root", "", "check");

    if(empty($UserName) ||empty($FoodType) ) {
        echo "Fill up the form properly";
    }
    else {

        if($conn -> connect_error) {
            echo "Failed to connect database!";
        }
        else {

            $stmt = $conn -> prepare("INSERT into food (UserId,Type) values (?, ?)");
             mysqli_stmt_bind_param($stmt, "ss", $UserName,  $FoodType );
     
            $status = $stmt -> execute();

            if($status) {
                echo "Successfully saved!";

            }
            else {
                echo "Username already existed!";
            }
            //header("Location: ../views/RHome.php ");
        }
        $conn -> close();   
    }   
    
}

?>