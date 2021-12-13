<?php

 session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Log out </title>
</head>
<body>
<?php
$_SESSION['username'];
session_destroy();

 header("Location: ../views/CoverPage.html ");
exit();


?>
</body>
</html>