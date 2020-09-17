<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!--Font Awesome-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/62be489fb8.js" crossorigin="anonymous"></script>

	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

	<!--Custom Styling-->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!--Admin Styling-->
	<link rel="stylesheet" href="../../assets/css/admin.css">
	
	<title>Edit Profile</title>
</head>
<body>

<?php
	include '../../app/includes/loggedin.php';
	include '../../app/database/connect.php';
	

	$userid = $_SESSION['userid'];
	$name = $_SESSION['name'];

	$sql = "select * from emp_info where userid='$userid'";
	$result = mysqli_query($conn, $sql);
	$arr = mysqli_fetch_Array($result);
	$username = $arr['username'];
	$cmp_name = $arr['cmp_name'];
	$loc = $arr['loc'];
	$join_date = $arr['join_date'];
	$position = $arr['position'];

?>	

<!--Admin page wrapper-->
<div class="admin-wrapper">

    <!--left sidebar-->
	<div class="left-sidebar">
		<ul>
			<li><a href="../posts/index.php">Manage Posts</a></li>
			<li>
				<div class="dropdown">
				  <button class="dropbtn">UserProfile</button>
				  <div class="dropdown-content">
				    <a href="../profile/profile.php">Make Profile</a>
				    <a href="../profile/viewprofile.php">View Profile</a>
				    <a href="../profile/editprofile.php">Edit Profile</a>
				  </div>
				</div>
			</li>

		</ul>
		
	</div>
    <!--left sidebar-->
    
    

		
    <!--main content-->
    <div class="admin-content">
    <div class="profile">

		<form autocomplete="off" action="editprof.php" method="post">
			<h2 class="form-title">User Profile</h2>

					

			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
			</div>
			<div>
				<label>Company currently working in:</label>
				<input type="text" name="cmp_name" value="<?php echo $cmp_name; ?>" class="text-input">
			</div>
			<div>
				<label>Location</label>
				<input type="text" name="loc" value="<?php echo $loc; ?>" class="text-input">
			</div>
			<div>
				<label>Joining Date</label>
				<input type="date" name="join_date" value="<?php echo $join_date; ?>" class="text-input">
			</div>
			<div>
				<label>Current Position</label>
				<input type="text" name="position" value="<?php echo $position; ?>" class="text-input">
			</div>
			

			<div class="button">
				<button type="submit" name="register-btn" class="btn btn-big">Submit</button>
			</div>

			<p><a href="../posts/index.php">Go to Dashboard</a></p>
			
		</form>
	
    </div>
</div>
    <!--main content-->

</div>
<!--Admin page wrapper-->

</body>
</html>
