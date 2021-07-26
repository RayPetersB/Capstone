<?php

session_start();
if(!isset($_SESSION['user'])){
header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1> Welcome
		<?php

		echo ucfirst($_SESSION['user']);

		?></h1>
	<a href=logout.php> Logout </a>
</body>
</html>