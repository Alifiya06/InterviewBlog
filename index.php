<?php 
include 'app/database/connect.php';

session_start();
if(isset($_POST['search-term'])) {
	$search = $_POST['search-term'];
	$sql ="select a.image,a.publish,a.article_id,u.userid,u.name,a.topic,a.description,a.date, a.content from user as u inner join article as a on u.userid=a.userid where a.publish=1 and a.topic like '$search%' or a.content like '$search%' or a.description like '$search%' order by date desc";

}
else{
$sql = "select a.image,a.publish,a.article_id,u.userid,u.name,a.topic,a.description,a.date from user as u inner join article as a on u.userid=a.userid where a.publish=1 order by date desc";
}

//echo $sql;
$result = mysqli_query($conn , $sql);

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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<title>InterviewBlog</title>
</head>
<body>

<!--TODO: INCLUDE HEADER HEREs-->
<?php
	if(!isset($_SESSION['userid']))
 		include("app/includes/header.php");
 	else{
 		include 'app/includes/loggedin.php';
 	}
 ?>

<!--page wrapper-->
<div class="page-wrapper">

	<!--content-->
	<div class="content clearfix">

        <!--main content-->
		<div class="main-content">
			<h1 class="recent-post-title">Recent Posts</h1>
<!--
			<?php /*while($arr = mysqli_fetch_Array($result)){
							$userid = $arr['userid'];
							$sql1 = "select name from user where userid='$userid'";
							$result2 = mysqli_query($conn, $sql1);
							$arr2 = mysqli_fetch_Array($result2);
							$name = $arr2['name'];
							$topic = $arr['topic'];
							$description = $arr['description'];
							$date = $arr['date'];
							$cmp_name = $arr['cmp_name'];
			?>

			<div class="post">
				<img src="assets/images/image_1.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php"><?php echo $topic; ?></a></h2>
					<i class="far fa-user"><?php echo $name; ?></i>
					&nbsp;
					<i class="far fa-calendar"><?php echo $date; ?></i>
					<p class="preview-text">
						<?php echo $description; ?>
					</p> 
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>


			
			<?php
			}*/ 
			?>  --> 



			<?php 

				while($arr = mysqli_fetch_Array($result)){
					
						$topic = $arr['topic'];
						$name = $arr['name'];
						$date = $arr['date'];
						$description = $arr['description'];
						$articleid = $arr['article_id'];
						$image = $arr['image'];
					?>
					<div class="post">
				<img src="assets/images/<?php echo $image; ?>"  alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php"><?php echo $topic; ?></a></h2>
					<i class="far fa-user"><?php echo $name; ?></i>
					&nbsp;
					<i class="far fa-calendar"><?php echo $date; ?></i>
					<p class="preview-text">
						<?php echo $description;  ?>
					</p> 
				<form action='single.php' method=GET>
					<input name='articleid' type='hidden' value='<?php echo $articleid; ?>'>
					<input type='submit' class="btn read-more" value="read More">
			
				</form>
				</div>
			</div>

			<?php
				
			}
			?>

			<!-- <div class="post">
				<img src="assets/images/image_1.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php">My interview experience at google</a></h2>
					<i class="far fa-user">Username</i>
					&nbsp;
					<i class="far fa-calendar">April 11, 2020</i>
					<p class="preview-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p> 
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post">
				<img src="assets/images/image_1.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php">My interview experience at google</a></h2>
					<i class="far fa-user">Username</i>
					&nbsp;
					<i class="far fa-calendar">April 11, 2020</i>
					<p class="preview-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p> 
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>

			<div class="post">
				<img src="assets/images/image_1.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php">My interview experience at google</a></h2>
					<i class="far fa-user">Username</i>
					&nbsp;
					<i class="far fa-calendar">April 11, 2020</i>
					<p class="preview-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p> 
					<a href="single.php" class="btn read-more">Read More</a>
				</div>
			</div>-->
		</div>
        <!--main content-->
		<div class="sidebar">

			<div class="section search">
				<h2 class="section-title">Search</h2>
				<form action="index.php" method="post">
					<input type="text" name="search-term" class="text-input" placeholder="Search....">	
				</form>
			</div>

		</div>

	</div>
	<!--content-->

	


</div>
<!--page wrapper-->

</body>
</html>