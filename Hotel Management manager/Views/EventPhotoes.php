<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1><font face= "Algerian" size="10">Events</font></h1>
    <P><a href="../Model/weddingphoto.php"><img src= "../image/h1.JPG" width="300" height="200"></a><br>
    <br><a href="../Model/weddingphoto.php"><img src= "../image/h2.jpg" width="300" height="200"></a><br>
    <br><img src= "../image/h3.jpg" width="300" height="200">
    </P>
</body>
</html>
<?php
	}else{
		header('location: login.html');
	}
?>