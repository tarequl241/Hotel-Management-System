<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
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
footer {
  background-color: green;
  padding: 1px;
  text-align: center;
  color: white;
}
article {
  float: center;
  padding: 10px;
  width: 100%;
  background-color: DarkCyan;
  height: 500px;} 
  section::after {
  content: " ";
  display: block;
  clear: both;
}
@media (max-width: 600px) {
   article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
</body>
<header>
	<h1><p style="text-align:center;"><font face= "Courier" size="10">Discount Codes</font></p></h1>
</header>
<article>
    <h2><a href="regularcustomer.html">Dicount For Regular Customers</a></h2>
    <h2>Dicount For Eid</h2>
</article>
    

<?php
	}else{
		header('location: login.html');
	}
?>