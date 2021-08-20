<?php
require_once("db.php");
if (!empty($_SESSION['user'])){ // Only if they are logged in
	header('Location: stones.php'); // Already logged in, take to stones.php
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login/Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Stone Dex</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="post">
			<h1 class="margin-text">Create Account</h1>
			<input name="user" type="text" placeholder="Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="validation.php" method="POST">
			<h1 class="margin-text">Login</h1>
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<button>Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To Get Back to Yous and Yours Please Login</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>StoneDex!</h1>
				<p>Start Keeping Track Now!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

	<script src="script.js" type="text/javascript" charset="utf-8" async defer></script>

</body>
</html>
