<!--<?php include("app/controllers/users.php") ; ?>-->

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
	
	<title>Register</title>
</head>
<body>

<?php include("app/includes/header.php") ; ?>


<div class="auth-content">

	<form autocomplete="off" action="registration.php" method="post">
		<h2 class="form-title">Register</h2>

		<!--<div class="msg success error">
			<li>Username required</li>
		</div>-->

		<div>
			<label>Name</label>
			<input type="text" name="name" class="text-input">
		</div>
		<div>
			<label>Username</label>
			<input type="text" name="username" class="text-input">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" class="text-input">
		</div>
		<div>
			<label>Email</label>
			<input type="email" name="email" class="text-input">
		</div>
		<div>
			<label>Year</label>
			<input type="integer" name="year" class="text-input">
		</div>
		<div>
			<label>College</label>
			<input type="text" name="college" class="text-input">
		</div>
		<div>
			<label>Date of Birth</label>
			<input type="date" name="dob" class="text-input">
		</div>

		<div class="button">
			<button type="submit" name="register-btn" class="btn btn-big">Register</button>
		</div>

		<p>Or <a href="login.php">Sign In</a></p>
		
	</form>
	
</div>


</body>
</html>