<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Room Available Page</title>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1">
    <style>
* {
  box-sizing: border-box;
}

body{
	font-family: Arial, Helvetica, sans-serif;
}
    header {
  background-color: Green;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: White;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
</body>
<header>
	<h2><font face= "Algerian" size="5">Room Available Page</font></h2>
</header>
<body>
<p><a href="../Model/room_detKINGQUEEN.php"><img src= "../image/1.JPG" width="300" height="200"></a>
<a href="../Model/RoomBalcony.php"><img src= "../image/2.JPG" width="300" height="200"></a>
<img src= "../image/3.JPG" width="300" height="200"></a>
<img src= "../image/4.JPG" width="300" height="200"></a>
<img src= "../image/5.JPG" width="300" height="200"></a></p>
</body>
</html>
<?php
	}else{
		header('location: login.html');
	}
?>