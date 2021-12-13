<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Event</title>
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
nav{
	float: center;
  width: 100%;
  height: 100px;
  background-color: lightblue;}
  nav ul {
  list-style-type: none;
  padding: 10px;
  
}
li {
  float: center;
}
li a{display: block;
padding: 5px;
background-color: skyblue;
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
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
</body>
<section>
<nav>
<ul>
	<div class= "main">
    <li><a>Past Events</a></li>
      <li><a>Upcoming Events</a></li>
    </ul>
  </nav>
  <article>
    <h1>Past Events</h1>
    <p><a href="EventPhotoes.php">Check Here For Event Photoes </a><br>
    We have organized many events before. We have 3 ball rooms which provides accomodation of 150-170 people each. 
        We have organized Iftar Part,Eid Party, Diwali Party, Durga puja this year.    </p>

    <h1>Upcoming Events</h1>
    <p>As winter is coming and as we know winter is the season of weddings. 
        We have our own event planner to decorate the ball rooms and own careting service with the best food in town. So it is easy to organize it under one roof.
    </p>
    </article>
</section>

</body>
</html>
<?php
	}else{
		header('location: login.html');
	}
?>
