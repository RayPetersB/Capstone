<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'session');

$email = $_POST['email'];
$pass = $_POST['password'];


$q = " select * from signin where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


if($num == 1){
	
	$row = mysqli_fetch_array($result);
	$_SESSION['user'] = $row['name'];
	header('location:home.php');


}else{

	header('location:index.html');
}



?>