<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'session');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from signin  where email = '$email' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{

	$qy= " insert  into signin(name , email, password) values ('$name' , '$email' , '$pass') ";
	mysqli_query($con, $qy);
}



?>