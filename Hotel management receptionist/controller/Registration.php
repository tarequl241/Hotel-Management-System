<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body background="../model/white.jpg">
	<center>
		<?php 

   $USERID = $NAME = $FATHERNAME = $MOTHERNAME = $PADDRESS = $PERADDRESS =$PHONE = $EMAIL = $PASSWORD = 
   $CONFIRMPASSWORD= "";

    $USERIDERR = $NAMEERR = $FATHERNAMEERR = $MOTHERNAMEERR = $PADDRESSERR =$PERADDRESSERR= $PHONEERR = $EMAILERR 
    = $PASSWORDERR = $CONFIRMPASSWORDERR = "";

             if ($_SERVER['REQUEST_METHOD'] == "POST")  {
             
                 if (empty($_POST['user'])) {
                 	$USERIDERR = "Please fill up the ID";
                 }

                else{
                       $USERID = $_POST['user'];
                 	
                    }
                  if (empty($_POST['myname'])) {
                    	$NAMEERR = "Fill up name";
                     }


                else{
                          $NAME = $_POST['myname'];

                     }

                     if (empty($_POST['fathername'])) {
                          $FATHERNAMEERR = "Fill up FATHERname";	
                     }

                     else{
                     	$FATHERNAME = $_POST['fathername'];
                     } 

                     if (empty($_POST['mothermame'])) {
                         $MOTHERNAMEERR = "Fill up Mothername";

                     }

                     else{
                     	  $MOTHERNAME = $_POST['mothermame'];
                     }

                     if (empty($_POST['paddress'])) {
                     	$PADDRESSERR = "Fill up the Present Address";

                     }
                      else{

                      	$PADDRESS = $_POST['paddress'];

                      }

                      if (empty($_POST['permaddress'])) {
                      	$PERADDRESSERR = "Fill up the Permanent Address";
                      }

                    else{ 
                          $PERADDRESS = $_POST['permaddress'];

                        }



                       if (empty($_POST['phone'])) {
                      	$PHONEERR = "Please Fill up the phone number";
                      }

                      else{
                      	$PHONE = $_POST['phone'];
                      }

                      if (empty($_POST['email'])) {
                        $EMAILERR = 'Please fill up the email';
                      }
                      else{
                        $EMAIL = $_POST['email'];

                      }



                       if (empty($_POST['pass'])) {
                        $PASSWORDERR = "Please Fill up the password";
                      }

                      else{
                        $PASSWORD = $_POST['pass'];
                      }

                      if (empty($_POST['Confirmpass'])) {
                        $CONFIRMPASSWORDERR = 'Please fill up the Confirmpass';
                      }
                      else{
                        $CONFIRMPASSWORD = $_POST['Confirmpass'];

                      }




if($USERIDERR=="" && $NAMEERR=="" && $FATHERNAMEERR=="" && $MOTHERNAMEERR=="" && $PADDRESSERR=="" && $PERADDRESSERR =="" && $PHONEERR=="" && $EMAILERR=="" && $PASSWORDERR=="" && $CONFIRMPASSWORDERR==""){

$User_Id = $_POST['user'];
$Name = $_POST['myname'];
$Gender = $_POST['gender'];
$Date_of_Birth = $_POST['dateOfBirth'];
$Father_Name = $_POST['fathername'];
$Mother_Name = $_POST['mothermame'];
$Present_Address = $_POST['paddress'];
$Permanent_Address = $_POST['permaddress'];
$Phone_Number = $_POST['phone'];
$Email_Address = $_POST['email'];
$Password = $_POST['pass'];
$Confirm_Password = $_POST['Confirmpass'];


   if ($Password ==$Confirm_Password) {
     
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $dbname = "check";

//Mysqli Procedural

     $conn2= mysqli_connect($hostname,$username,$password,$dbname);
     if (mysqli_connect_error()) {

      echo "Database Connection Failed!...";
      echo "<br>";
      echo mysqli_connect_error();
    }

    else{


$stmt2= mysqli_prepare($conn2, "insert into check1(User,Name,Gender,DOB,Father,Mother,Present,Permanent,Mobile,Email,Password) values(?,?,?,?,?,?,?,?,?,?,?)");
mysqli_stmt_bind_param($stmt2,"sssssssssss",$Us,$Na,$Ge,$Do,$Fa,$Mo,$Pr,$Pe,$Ph,$Em,$Pa);

$Us = $_POST['user'];
$Na = $_POST['myname'];
$Ge = $_POST['gender'];
$Do = $_POST['dateOfBirth'];
$Fa = $_POST['fathername'];
$Mo = $_POST['mothermame'];
$Pr = $_POST['paddress'];
$Pe = $_POST['permaddress'];
$Ph = $_POST['phone'];
$Em = $_POST['email'];
$Pa = $_POST['pass'];
$res = mysqli_stmt_execute($stmt2);


if ($res) {
   
   echo "<br> Data Insert Successful";
   header("Location: Login.php" );
   exit();
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
else{

echo "Password doesn't match";
  } 
   

 }
     

                  




		?>




	</center>

</body>
</html>

<html>
<head>
  <title> Registration form</title>
</head>
<body background="../model/white.jpg">
  <center><font color="black"> <h1> WELCOME TO SIGNUP PAGE (RECEPTIONIST)<h1></font></center>
    <br>
<font size="4" color="white">
 <form  name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post">
  <b>
    <center>
      
      <label for="user"> User Id:</label>
      <input type="text" name="user" id="user" color="Rainbow" value="<?php echo $USERID?>">
      <p><?php echo $USERIDERR;?></p>
      

      <label for="myname">Enter your name:</label>
      <input type="text" name="myname" id="myname" color="Rainbow" value="<?php echo $NAME?>">
      <p> <?php echo $NAMEERR; ?></p>
      
      <label for="Gender">Gender: </label>
      <input type="radio" name="gender" id="male" value="male">
      <label for="male">Male</label>

      <input type="radio" name="gender" id="female" value="female">
      <label for="female">Female</label>

      <input type="radio" name="gender" id="other" value="other">
      <label for="other">Other</label>
      <br><br>

      <label for="dob">Date of Birth: </label>
      <input type="date" id="dob" name="dateOfBirth" value="2021-02-15" min="1980-01-01" max="2025-12-31">
      <br><br>
      <label for="fathername">Father's Name: </label>
     <input type="text" name="fathername" id="fathername" value="<?php echo $FATHERNAME?>">
      <p><?php echo $FATHERNAMEERR; ?></p>

     <label for="mothermame">Mother's Name: </label>
    <input type="text" name="mothermame" id="mothermame" value="<?php echo $MOTHERNAME?>">
    <p><?php echo $MOTHERNAMEERR; ?></p>
  

    <label for="paddress">Present Address: </label>
    <input type="text" name="paddress" id="paddress" value="<?php echo $PADDRESS ?>">
    <p><?php echo $PADDRESSERR; ?></p>
 

     <label for="permaddress">Permanent Address: </label>
     <input type="text" name="permaddress" id="permaddress" value="<?php echo $PERADDRESS?>">
     <p><?php echo $PERADDRESSERR; ?></p>
   
     <label for="phone">Phone number: </label>
      <input type="tel" id="phone" name="phone" value="<?php echo $PHONE?>">
      <p><?php echo $PHONEERR; ?></p>
      
      <label for="email">Email Address: </label>
      <input type="email"  id="email" name="email" value="<?php echo $EMAIL?>">
      <p><?php echo $EMAILERR; ?></p>
      
      <label for="pass">Password</label>
      <input type="password" id="pass" name="pass" value="<?php echo $PASSWORD?>">
      <p><?php echo $PASSWORDERR; ?></p>

      <label for="Confirmpass">Confirm Password: </label>
      <input type="password" id="Confirmpass" name="Confirmpass" value="<?php echo $CONFIRMPASSWORD?>">
      <p><?php echo $CONFIRMPASSWORDERR; ?></p>
      <br>
        

</font>
<input  style ="color:black; size: 1500px" type="submit" value="Submit">
 <br>
<p>Already have an account? <a href="Login.php">Log in</a>.</p>
 </center>
</b>
</form>

  <p id="errorMsg"></p>
<script>
    function validate(){

var isValid=false;
var user = document.forms["jsForm"]["user"].value;
var myname = document.forms["jsForm"]["myname"].value;
var gender = document.forms["jsForm"]["gender"].value;
var dateOfBirth = document.forms["jsForm"]["dateOfBirth"].value;
var fathername = document.forms["jsForm"]["fathername"].value;
var mothername = document.forms["jsForm"]["mothername"].value;
var paddress = document.forms["jsForm"]["paddress"].value;
var permaddress = document.forms["jsForm"]["permaddress"].value;
var phone = document.forms["jsForm"]["phone"].value;
var email = document.forms["jsForm"]["email"].value;
var pass = document.forms["jsForm"]["pass"].value;
var Confirmpass = document.forms["jsForm"]["Confirmpass"].value;
     
if (user == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up User_Id Properly </b>";
document.getElementById('errorMsg').style.color="red";
 
}
 else if (myname == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up name Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (gender == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Gender Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (dateOfBirth == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up dateOfBirth Properly </b>";
document.getElementById('errorMsg').style.color="red";
 
}
else if (fathername == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Father name Properly </b>";
document.getElementById('errorMsg').style.color="red";
 
}
else if (mothername == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up  Mother name Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (paddress == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Present_Address Properly </b>";
document.getElementById('errorMsg').style.color="red";
 
}
else if (permaddress == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Permanent_Address Properly </b>";
 document.getElementById('errorMsg').style.color="red";
}
else if (phone == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Phone_Number  Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (email == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill Email_Address Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (pass == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Password Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else if (Confirmpass == ""  ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Confirmpass Properly </b>";
document.getElementById('errorMsg').style.color="red";
}
else{
    isValid = true;
}
 
        return isValid;
    }
 
</script>
</body>
</html>