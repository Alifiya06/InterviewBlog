<!DOCTYPE html>
<html>
<head>
	<!--Font Awesome-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/62be489fb8.js" crossorigin="anonymous"></script>

	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

	<!--Custom Styling-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<title>Login</title>
</head>
<body>

<?php include("app/includes/header.php") ; ?>



<div class="auth-content">

	<form action="validation.php" method="post">
		<h2 class="form-title">Login</h2>

		<div>
			<label>Username</label>
			<input type="text" name="name" class="text-input">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" class="text-input">
		</div>

		<div class="button">
			<button type="submit" name="login-btn" class="btn btn-big">Login</button>
		</div>

		<p>Or <a href="register.php">Sign Up</a></p>
		
	</form>
	
</div>


</body>
</html>