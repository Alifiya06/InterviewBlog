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

<header>
	<div class="logo">
		<h1 class="logo-text"><span>Alifiya's</span> Interview Blog</h1>
	</div>
	<i class="fas fa-bars menu-toggle"></i>
	<ul class="nav">
		
		<li>
			<a href="#">
				<i class="fas fa-user"></i>
			    Username
			    <i class="fas fa-chevron-down" style="font-size: 0.8em"></i>
		    </a>
			<ul>
				
				<li><a href="#" class="logout">Logout</a></li>

			</ul>
		</li>

</header>

<!--Admin page wrapper-->
<div class="admin-wrapper">

    <!--left sidebar-->
	<div class="left-sidebar">
		<ul>
			<li><a href="index.php">Manage Posts</a></li>
			<li><a href="../users/index.php">Manage Users</a></li>

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

			<table>
				<thead>
					<th>SN</th>
					<th>Title</th>
					<th>Author</th>
					<th colspan="3">Action</th>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>This is the first post</td>
						<td>Alifiya</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                        <td><a href="#" class="publish">publish</a></td>
					</tr>

					<tr>
						<td>2</td>
						<td>This is the second post</td>
						<td>Hussain</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                        <td><a href="#" class="publish">publish</a></td>
					</tr>

				</tbody>
			</table>
			
		</div>
		
	</div>
    <!--Main Content-->
    
	

	


</div>
<!--Admin page wrapper-->

</body>
</html>