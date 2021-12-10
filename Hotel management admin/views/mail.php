<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number= $_POST['mobile'];

$to = "jannatulmahibd1998@gmail.com";
$subject = "Mail From a User";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;"\r\n Mobile number=" . $number;
$headers = "From: tarequl241@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>