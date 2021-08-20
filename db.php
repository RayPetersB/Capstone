<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
session_start();

$con = mysqli_connect('localhost', 'ray', 'itsraybitch!');
mysqli_select_db($con, 'raypeters');

// If no connection, just die
if (!$con) {
	die("No connection mysql connection");
}

?>
