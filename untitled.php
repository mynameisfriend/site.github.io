<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php $servername = "localhost"; $username = "username"; $password = "password"; // Create connection 
$cn = mysqli_connect($servername, $username, $password); // Check connection 
if ($cn->connect_error) { echo "Connection failed : " . $cn->connect_error; } echo "Connected successfully"; ?> 
</body>
</html>