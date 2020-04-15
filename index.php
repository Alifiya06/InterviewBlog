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
<?php include("app/includes/header.php") ; ?>

<!--page wrapper-->
<div class="page-wrapper">

	<!--content-->
	<div class="content clearfix">

        <!--main content-->
		<div class="main-content">
			<h1 class="recent-post-title">Recent Posts</h1>

			<div class="post">
				<img src="assets/images/image_3.png" alt="" class="post-image">
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
				<img src="assets/images/image_3.png" alt="" class="post-image">
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
				<img src="assets/images/image_3.png" alt="" class="post-image">
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
				<img src="assets/images/image_3.png" alt="" class="post-image">
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