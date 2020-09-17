<?php
	session_start();
	/*include '../../app/database/connect.php';
	if(isset($_POST['publish']) and isset($_POST['articleid'])){
       $userid = $_SESSION['userid'];
       $articleid = $_POST['articleid'];
       $sql = "update article set publish=1 where article_id='$articleid' and userid='$userid'";
       $result=mysqli_query($conn, $sql);
       if($result){
			echo "<script>alert('article published!!')</script>";	
		}
	}

	if(isset($_POST['delete']) and isset($_POST['articleid'])){
		$articleid = $_POST['articleid'];
		$sql = "DELETE FROM `article` WHERE article_id='$articleid'";
		$result = mysqli_query($conn, $sql);

	}*/
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
	
	<title>View Profile</title>
</head>
<body>

<?php
	include '../../app/includes/loggedin.php';
	include '../../app/database/connect.php';

	//$name = $_SESSION['name'];
	$sql = "select u.name,u.email,u.year,u.college,u.dob,e.username,e.cmp_name,e.loc,e.join_date, e.position from user as u inner join emp_info as e on u.userid=e.userid ";
	$result = mysqli_query($conn, $sql);
	
	$arr = mysqli_fetch_Array($result);
	$name = $arr['name'];
	$email = $arr['email'];
	$year = $arr['year'];
	$college = $arr['college'];
	$dob = $arr['dob'];
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
    
    <!--Main Content-->
    <div class="admin-content">
    	<div class="content clearfix single">

        <!--main content-->
			<div class="main-content single">
				<h1 class="post-title"><?php echo $username; ?>'s Profile</h1>

				<div class="post-content">
					<div class ="userprofile">
						<p>
							<li style="margin-bottom: 5px ;"><b>Name: </b><?php echo $name; ?></li>
							<li style="margin-bottom: 5px ;"><b>Email: </b><?php echo $email; ?></li>
							<li style="margin-bottom: 5px ;"><b>College: </b><?php echo $college; ?></li>
							<li style="margin-bottom: 5px ;"><b>Year: </b><?php echo $year; ?></li>
							<li style="margin-bottom: 5px ;"><b>Date of Birth: </b><?php echo $dob; ?></li>
							<li style="margin-bottom: 5px ;"><b>Company's Name : </b><?php echo $cmp_name; ?></li>
							<li style="margin-bottom: 5px ;"><b>Location: </b><?php echo $loc; ?></li>
							<li style="margin-bottom: 5px ;"><b>Joining Date: </b><?php echo $join_date; ?></li>
							<li style="margin-bottom: 5px ;"><b>Position: </b><?php echo $position; ?></li>

						</p>
						
					</div>
					
				</div>
				
			</div>

    </div>

	
    <!--Main Content-->
    
	

	


</div>
</div>
<!--Admin page wrapper-->

</body>
</html>