<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width , initial-scale = 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Font Awesome-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/62be489fb8.js" crossorigin="anonymous"></script>

	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

	<!--Custom Styling-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	<title>Single Post</title>
</head>
<body>

<?php include("app/includes/header.php") ; 
	$articleid =  $_GET['articleid'];
	include 'app/database/connect.php';

	$sql = "select * from article where article_id='$articleid'";
	$result = mysqli_query($conn, $sql);
	$arr = mysqli_fetch_array($result);

	$topic = $arr['topic'];
	$content = $arr['content'];
?>

<?php
    include 'mpdf/vendor/autoload.php';

	if(isset($_POST['submit']) and isset($_POST['articleid'])){
		$articleid1 = $_POST['articleid'];
		$sql1="select topic, content from article where article_id='$articleid1'";
		$result1 = mysqli_query($conn, $sql1);
		$array= mysqli_fetch_array($result1);

		$topic1 = $array['topic'];
		$content1 = $array['content'];

		//create HTML of the data
		/*ob_start();
		?>

		<h6>Document</h6>
		<p> <?php echo $topic1; ?></p>
		<p> <?php echo $content1; ?></p>

		<?php
		$body = ob_get_clean();

		$body = iconv("utf-8", "utf-8//ignore", $body);*/

		//create new pdf instance
		$mpdf = new \Mpdf\Mpdf();

        //create our pdf
		$data = '';
		$data .= '<br /><h3>Document</h3>';

		$data .='<strong>Topic: </strong>'.$topic1.'<br />';
		$data .='<strong>Experience: </strong>'.$content1.'<br />';

		//write HTML
		$mpdf->WriteHTML($data);

		//output to browser
		$mpdf->output('interview.pdf', 'D');

	}

?>



<!--page wrapper-->
<div class="page-wrapper ">

	<!--content-->

	<div class="content clearfix single">

        <!--main content-->
		<div class="main-content single">
			<h1 class="post-title"><?php echo $topic; ?></h1>

			<div class="post-content">
				<?php
					echo $content;
				?>
			</div>
			
		</div>
		<form method="POST">
			<input type="hidden" name="articleid" value="<?php  echo $articleid; ?>">
	        <input type="submit" name="submit" class="btn btn-secondary btn-sm" value="Generate PDF">
		</form>
        <!--main content-->

        <!--sidebar-->
		<!--<div class="sidebar single">

			<div class="section popular">
				<h2 class="section-tit"></h2>
				
			</div>

			

		</div>-->
        <!--sidebar-->

	</div>
	<!--content-->

	


</div>
<!--page wrapper-->

</body>
</html>