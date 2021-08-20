<?php
require_once("db.php");

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Query to validate login
$q = "SELECT * from user WHERE `email` = '".mysqli_real_escape_string($con, strtolower($_POST['email']))."' AND `password` = '".mysqli_real_escape_string($con, $_POST['password'])."'";
// Get result
$result = mysqli_query($con, $q);
// Check if match
$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "already registered";
} else {
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$q = "INSERT INTO user (`name`, `email`, `password`) VALUES ('{$user}', '{$email}', '{$password}')";
	mysqli_query($con, $q);
	header("Location: index.php");
	exit;
}



?>
