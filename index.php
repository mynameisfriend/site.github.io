<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php $servername = "db4free.net"; $username = "artemsquery"; $password = "qwaszxer"; // Create connection 
$cn = mysqli_connect($servername, $username, $password); // Check connection 
if ($cn->connect_error) { echo "Connection failed : " . $cn->connect_error; } echo "Connected successfully"; ?> 
</body>
</html>