<!DOCTYPE html>
<html>
<head>
<title>Vip Req</title>
</head>
<body background= "../model/white.jpg" >

<center>
<br>
	<br>
	<br>
    <br>
<h1 style=" color: blue; text-align:centre;">Special Request</h1>

<fieldset >
	<label for="UserId">User Id</label>
<input type="text" name="UserId" id="UserId">
<br><br>
<label for="complain"></label>
<textarea name="complain" id="complain" rows="8" cols="40" placeholder="Vip Request"></textarea>
<br>
<br>
<br>

 </fieldset></b>

<br><br>

 <button id="submit" onclick="submit()">Submit</button>

<p id="p1"></p>

<br>
<hr>
<br>
</body>

<body>

 <h1>Search By Id </h1>

<label for="searchKey">ID:</label>
<input type="number" name="searchKey" id="searchKey">

 <button id="search" onclick="search()">Search</button>
<br><br>
<button onclick="history.go(-1);">Back </button>
<p id="p2"></p>

 </center>

 <script>
function submit() {

 
 var UserId = document.getElementById("UserId").value;
 var complain = document.getElementById("complain").value;


if(UserId == "" || complain == "" ) {
document.getElementById("p1").innerHTML = "Fill up the form properly";
document.getElementById("p1").style.color = "red";
}

 

 else {

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if(this.readyState == 4 && this.status == 200) {
document.getElementById("p1").innerHTML = xhttp.responseText;
document.getElementById("p1").style.color = "green";
}
}

xhttp.open("POST", "../controller/VipReq.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("UserId="+UserId+"&complain="+complain);
}
}

 

 function search() {
var searchKey = document.getElementById("searchKey").value;

 

 var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if(this.readyState == 4 && this.status == 200) {
document.getElementById("p2").innerHTML = xhttp.responseText;
}
}

 

 xhttp.open("GET", "../controller/VipReq.php?searchKey=" + searchKey, true);
xhttp.send();
}

 

 </script>

 

</body>
</html>
