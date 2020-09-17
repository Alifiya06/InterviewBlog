<?php
	session_start();
	if(!isset($_SESSION['userid'])){
		echo "<script>alert('Login first')</script>";
		header('location:/interviewblog/login.php');
	}
	else if($_SESSION['year'] < 3){
		echo "<script>alert('you are not eligible to post article')</script>";
		header('location:/index.php');
	}

	$userid = $_SESSION['userid'];

	

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
	
	<title>Admin posts - add posts</title>
</head>
<body>
<?php
	include '../../app/database/connect.php';

	if(isset($_POST['edit']) and isset($_POST['articleid'])){
		$_SESSION['article_id'] = $articleid = $_POST['articleid'];
		$sql = "select * from article where article_id='$articleid'";
		$result = mysqli_query($conn, $sql);
		$arr = mysqli_fetch_Array($result);

		$topic = $arr['topic'];
		$content = $arr['content'];
		$description = $arr['description'];
		$cmp_name = $arr['cmp_name'];
		$image = $arr['image'];

		/*$sql = "insert into `article` (userid,topic, content, description, cmp_name) values(?,?,?,?,?)";
		$stmt = mysqli_prepare($conn,$sql);
		$stmt->bind_param("sssss",$userid, $topic, $content, $description, $cmp_name);
		$stmt->execute();*/
	}
	$sql1 = "select userid from emp_info where userid=\'$_SESSION['userid']\'";
	$result1 = mysqli_query($conn, $sql1);

	
?>

<?php include '../../app/includes/loggedin.php'; ?>

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
				  	<?php if(is_null($result1)) {echo "<script>alert('yuho!!');</script>";} if($result1){ ?>
				    <a href="#">Make Profile</a>
				<?php }else{ ?>
					<a href="">Make Profile</a>
				<?php } ?>
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

		<!--<div class="button-group">
			<a href="create.php" class="btn btn-big">Add Post</a>
			<a href="index.php" class="btn btn-big">Manage Post</a>
			
		</div>-->

		<div class="content">
			<h2 class="page-title">Manage Posts</h2>

			<form action="editing.php" method="post" class="intvpost" enctype="multipart/form-data">
				<div class="intvpost1">
					<label>Title</label>
					<input type="text" name="topic" value="<?php echo $topic; ?>" class="text-input">
				</div>

				<div class="intvpost1">
					<label>Description</label>
					<input type="text" name="description" value="<?php echo $description; ?>" class="text-input">
				</div>

				<div class="intvpost2">
					<label>Body</label>
					<textarea name="content" id="body"><?php echo $content; ?></textarea>
				</div>

				<div class="intvpost1">
					<label>Company Name</label>
					<input type="text" name="cmp_name" value="<?php echo $cmp_name; ?>" class="text-input">
				</div>

				<div class="intvpost1">
					<label>Upload Image</label>
					<input type="file" name="file">
				</div>

				<div class="intvpost3">
					<button type="submit" name="add-post" class="btn btn-big">Add Post</button>
				</div>

			</form>
			
			
		</div>
		
	</div>
    <!--Main Content-->
    
	

	


</div>
<!--Admin page wrapper-->

<!--JQuery-->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<!--CKeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

<!--custom script-->
<script src="../../assets/js/scripts.js"></script>
</body>
</html>