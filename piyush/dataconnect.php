<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
<?php

$conn=mysqli_connect("localhost", "root", "", "network");

if ($conn == FALSE)
{
    die("ERROR: It is not Found" . mysqli_connect_error($conn));
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address= $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `server`(`name`, `phone`, `address`, `email`, `password`, `birthdate`, `gender`) VALUES ('$name', '$phone', '$address', '$email', '$password', '$birthdate', '$gender')";

if(mysqli_query($conn, $sql))
{
    echo "data has been stored";
}
else{
    echo "ERROR : data has been not stored";
}
?>
</body>
</html>