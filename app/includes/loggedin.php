<header>
	<div class="logo">
		<h1 class="logo-text"><span>Alifiya's</span> Interview Blog</h1>
	</div>
	<i class="fas fa-bars menu-toggle"></i>
	<ul class="nav">
		<li><a href="/interviewblog/index.php">Home</a>
			<!--<ul style="left: 0px">
				<li><a href="#">Landing Page</a></li>
				<li><a href="#">Team</a></li>

			</ul>-->
		</li>
		<li><a href="#">About</a></li>
		<li><a href="#">Services</a></li>
		<!-- <li><a href="#">Sign up</a></li>
		<li><a href="#">Login</a></li>-->
		<li>
			<a href="#">
				<i class="fas fa-user"></i>
			    <?php echo $_SESSION['name']; ?>
			    <i class="fas fa-chevron-down" style="font-size: 0.8em"></i>
		    </a>
			<ul>
				<li><a href="/interviewblog/users/posts/index.php">Dashboard</a></li>
				<li><a href="/interviewblog/logout.php" class="logout">Logout</a></li>

			</ul>
		</li>

</header>