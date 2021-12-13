<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

 $UserName = $_POST["UserName"];
$BedType = $_POST["BedType"];
$PaymentType = $_POST["PaymentType"];
$Amount = $_POST["Amount"];
 if(empty($UserName)|| empty($BedType)|| empty($PaymentType) || empty($Amount)) {
echo "Fill up the form properly";
}
else {

 $conn = new mysqli("localhost", "root", "", "check");

 if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {

 $stmt = $conn -> prepare("INSERT INTO payment_r (UserName,BedType,PaymentType,Amount) VALUES(?,?,?,?)");
$stmt -> bind_param("ssss", $UserName,$BedType,$PaymentType,$Amount);

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
$sql = "SELECT UserName,BedType,PaymentType,Amount FROM payment_r WHERE id = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT UserName,BedType,PaymentType,Amount FROM payment_r";
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
echo $row["UserName"] . " " . $row["BedType"]. " " . $row["PaymentType"]. " " . $row["Amount"];
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