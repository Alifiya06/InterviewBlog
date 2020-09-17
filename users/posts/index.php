<?php
	session_start();
	include '../../app/database/connect.php';
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

	}
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
	
	<title>Admin posts - manage posts</title>
</head>
<body>

<?php
	include '../../app/includes/loggedin.php';
	

	$userid = $_SESSION['userid'];
	$name = $_SESSION['name'];

	$sql = "select * from article where userid='$userid'";
	$result = mysqli_query($conn, $sql);

	$sql1 = "select userid from emp_info where userid='$userid'";
	echo $sql1;
	$result1 = mysqli_query($conn, $sql1);
	$num = mysqli_fetch_array($result1);

	if($num){
		echo "success";
	}
	else{
		echo "failed";
	}


	?>

<!--Admin page wrapper-->
<div class="admin-wrapper">

    <!--left sidebar-->
	<div class="left-sidebar">
		<ul>
			<li><a href="index.php">Manage Posts</a></li>
			<li>
				<div class="dropdown">
				  <button class="dropbtn">User Profile</button>
				  <div class="dropdown-content">
				    <?php /*if(is_null($result1)) {echo "<script>alert('yuho!!');</script>";}*/ if($num){ ?>
				    <a href="#">Make Profile</a>
				<?php }else{ ?>
					<a href="../profile/profile.php">Make Profile</a>
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

		<div class="button-group">
			<a href="create.php" class="btn btn-big">Add Post</a>
			<a href="index.php" class="btn btn-big">Manage Post</a>
			
		</div>

		<div class="content">
			<h2 class="page-title">Manage Posts</h2>

			<table cellspacing="0" style="border-spacing: 0;">
				<thead>
					<th>SN</th>
					<th>Title</th>
					<th>Author</th>
					<th colspan="3">Action</th>
				</thead>

				<tbody>

					<?php while($arr = mysqli_fetch_Array($result)){
						$sno =  $arr['article_id'];
						$topic = $arr['topic'];
						$author = $name;

					?>
					<tr>
						<td><?php  echo $sno; ?></td>
						<td><?php echo $topic;?></td>
						<td><?php echo $author; ?></td>
						<td>
							<form action="edit.php" method="POST">
								<input type="hidden" name="articleid" value="<?php  echo $sno; ?>">
	                        	<input type="submit" name="edit" class="btn btn-secondary btn-sm" value="edit">
	                        </form>
                        </td>

                        <td>
	                        <form method="POST">
								<input type="hidden" name="articleid" value="<?php  echo $sno; ?>">
	                        	<input type="submit" name="delete" class="btn btn-secondary btn-sm" value="delete">
	                        </form>
                        </td>

                      
                        <td>
                        	<form method="POST">
                        		<input type="hidden" name="articleid" value="<?php  echo $sno; ?>">
                        		<input type="submit" name="publish" class="btn btn-secondary btn-sm" value="publish">
                            </form>
                        </td>
					</tr>

					<?php
					     }
				    ?>

				</tbody>
			</table>
			
		</div>
		
	</div>
    <!--Main Content-->
    
	

	


</div>
<!--Admin page wrapper-->

</body>
</html>