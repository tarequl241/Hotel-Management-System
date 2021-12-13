<?php

session_start();
?>

<?php
$username = $password = $Type="";
$usernameerr = $passworderr = $Typeerr="";

if($_SERVER['REQUEST_METHOD'] == "POST") {

if(empty($_POST['username'])) {
$usernameerr = "Please Fill up the username!";
}

else if(empty($_POST['password'])) {
$passworderr = "Please Fill up the password!";
}

else if(empty($_POST['Type'])) {
$Typeerr = "Please Fill up the type!";
}

if($usernameerr ==""&& $passworderr==""&& $Typeerr==""){

$username = $_POST['username'];
$password = $_POST['password'];
$Type = $_POST['Type'];

if($Type=='Admin'){

}

else if($Type=='Receptionist'){

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "check";

$conn2 = mysqli_connect($hostname, $username, $password, $dbname);


if($conn2->connect_errno) {
echo "Database Connection Failed!...";
echo "<br>";
echo $conn2->connect_error;
}
else {

$_SESSION['user'] = $_POST['username'];
$stmt2 = $conn2->prepare("select User,Password from check1 where User=? && Password=? ");
$stmt2->bind_param("ss", $usr,$pass);
$usr = $_POST['username'];
$pass = $_POST['password'];

$stmt2->execute();
$res =$stmt2->get_result();
$check = $res->fetch_assoc();


if($check) {
echo " <br> Data Insert Successful!";
header("Location: ../views/RHome.php ");
exit();
}
else {
echo "Login Failed.";
echo "<br>";
$usernameerr= "Check User id or password" ;
}

}

}

else if($Type=='Manager'){
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "check";

$conn2 = mysqli_connect($hostname, $username, $password, $dbname);


if($conn2->connect_errno) {
echo "Database Connection Failed!...";
echo "<br>";
echo $conn2->connect_error;
}
else {

$_SESSION['username'] = $_POST['username'];
$stmt2 = $conn2->prepare("select * from log_in where username='{$username}' and password='{$password}'");
$stmt2->bind_param("ss", $username,$password);
$usrname = $_POST['username'];
$password = $_POST['password'];

$stmt2->execute();
$res =$stmt2->get_result();
$check = $res->fetch_assoc();


if($check) {
echo " <br> Data Insert Successful!";
header("Location: ../Views/RHome.php ");
exit();
}
else {
echo "Login Failed.";
echo "<br>";
$usernameerr= "Check User id or password" ;
}

}
}
else if($Type=='User'){

}

}

}

?>
<!DOCTYPE html>
<html>
<head >
<title>Sign in </title>
</head>
<body background= "../model/white.jpg">



<center>
<h1 style="text-align:centre; font-size : 70px;">Login</h1>
</center>>
<form  name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post">




<center>

<font size = 5>
<label for="username">User Id:</label>
<input style="color: green; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username" placeholder="Enter UserId" value="<?php echo $username ?>">
<p><?php echo $usernameerr; ?></p>


<label for="password">Password:</label>
<input style="color: green; font-size : 8px; width: 90px; height: 20px;" type="password" id="password" name="password" value="<?php echo $password ?>">
<?php echo $passworderr; ?><br><br>

<!-- <label for="Type" >Type: </label>
<input type="radio" name="Type" id="Admin" value="Admin" >
<label for="Admin">Admin</label>

<input type="radio" name="Type" id="Manager" value="Manager" >
<label for="Manager">Manager</label> -->

<input type="radio" name="Type" id="Receptionist" value="Receptionist" >
<label for="Receptionist">Receptionist</label>

<!-- <input type="radio" name="Type" id="User" value="User" >
<label for="User">User</label>
<?php echo $Typeerr; ?> 
<br><br> -->




</center>
<br></b>

<center>
<input style="color: green; font-size : 15px; width: 90px; height: 30px;" type="submit" value="Submit">
</font>
<button onclick="history.go(-1);" style="font-size: 15px; width: 90px; height: 30px;  color:green;  ">Back</button>

<p>Not a user? <a href="Registration.php">Sign Up</a>.</p>
 
</center>

</form>
<p id = "errorMsg"></p>
<script>
    function validate(){
        var isValid= false;
        var username= document.forms["jsForm"]["username"].value;
 
        var password= document.forms["jsForm"]["password"].value;
if (username == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USERNAME Properly </b>";
 

document.getElementById('errorMsg').style.color="black";
 
}
 
        else if (password == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up PASSWORD Properly </b>";
 

document.getElementById('errorMsg').style.color="black";
 
}
else{
    isValid = true;
}
 
        return isValid;
    }
 
</script>



</body>
</html>