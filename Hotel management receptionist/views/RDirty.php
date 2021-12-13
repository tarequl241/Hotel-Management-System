<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Cleaning</title>
</head>
<body background="../model/fdt1.jpg">
  <center>
    <?php 

           $USERID=  $ROOMNO = "";

             $USERIDERR = $ROOMNOERR= "";

             if ($_SERVER['REQUEST_METHOD'] == "POST")  {
             
                 if (empty($_POST['user'])) {
                  $USERIDERR = "Please fill up the ID";
                 }

                else{
                       $USERID = $_POST['user'];
                  
                    }
                  if (empty($_POST['room'])) {
                      $ROOMNOERR = "Fill up the room no";
                     }


                else{
                          $ROOMNO= $_POST['room'];

                     }

                      if($USERIDERR=="" && $ROOMNOERR==""){

       $UserId = $_POST['user'];
      $RoomNo = $_POST['room'];

     $hostname = "localhost";
     $username = "root";
     $password = "";
     $dbname = "check";


     $conn2= mysqli_connect($hostname,$username,$password,$dbname);
     if (mysqli_connect_error()) {

      echo "Database Connection Failed!...";
      echo "<br>";
      echo mysqli_connect_error();
    }

    else{


$stmt2= mysqli_prepare($conn2, "insert into dirty(UserId,RoomNo) values(?,?)");
mysqli_stmt_bind_param($stmt2,"ss",$Us,$Ro);

$Us = $_POST['user'];
$Ro = $_POST['room'];


$res = mysqli_stmt_execute($stmt2);


if ($res) {
   
   echo "<br> Data Insert Successful";
   header("Location: RHome.php" );
   //exit();
   }
else{
  echo "Insert Data Failed";
  echo "<br>";
  $USERIDERR = "Try another user id";
      }
} 
 //$_SESSION['username'] = $Lastname;  
}
  
 }
                
    ?>
  </center>
</body>
</html>

<html>
<head>
  <title> Dirty Room</title>
</head>
<body background="fdt1.jpg">
  <font color="black"></font>
    <br>
<font size="4" color="white">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
  <b>
    <center>
      
      <label for="user"> User Id:</label>
      <input type="text" name="user" id="user" color="Rainbow" value="<?php echo $USERID?>">
      <p><?php echo $USERIDERR;?></p>

     
<br>
<br>
 <label for="room">Room No:</label>
<input name="room" value="<?php echo $ROOMNO?>">
<p><?php echo $ROOMNOERR;?></p> 

</font>
<input  style ="color:black; size: 1500px" type="submit" value="Submit">

 </center>
</b>
</form>
</body>
</html>