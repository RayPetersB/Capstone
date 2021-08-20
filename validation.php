<?php
require_once("db.php");

// Query to validate login
$q = "SELECT * from user WHERE `email` = '".mysqli_real_escape_string($con, strtolower($_POST['email']))."' AND `password` = '".mysqli_real_escape_string($con, $_POST['password'])."'";
// Get result
$result = mysqli_query($con, $q);
// Check if match
$num = mysqli_num_rows($result);

if ($num == 1) {
	// Grab user
	$row = mysqli_fetch_assoc($result);
	// Set Session
	$_SESSION['user'] = $row;
	// Redirect to stones.php
	header('Location: stones.php');
} else {
	session_destroy(); // Empty $_SESSION
	// Redirect to login
	header('Location: index.php');
}
