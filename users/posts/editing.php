<?php
session_start();
include '../../app/database/connect.php';


if(isset($_POST['add-post'])){
		$userid = $_SESSION['userid'];
		$articleid = $_SESSION['article_id'];
		$topic1 = $_POST['topic'];
		$content1 = $_POST['content'];
		$description1 = $_POST['description'];
		$cmp_name1 = $_POST['cmp_name'];

		$sql = "UPDATE `article` SET `topic`='$topic1', `content`='$content1', `description` = '$description1', `cmp_name`='$cmp_name1' WHERE `article`.`article_id` = '$articleid' AND `article`.`userid` = '$userid'";
				

				$result = mysqli_query($conn, $sql);
				if($result){
					echo "success";
				}
				else{
					echo "failed";
				}
		
		$file = $_FILES['file'];
		$file_name = $file['name']; 
		$file_type = $file ['type'];
		$file_size = $file ['size'];
		$file_path = $file ['tmp_name'];

		$arr = explode('.', $file_name);
		$ext = end($arr);
		$file_name = $articleid.".".$ext;

		if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"||$file_type="image/jpg")&& $file_size<=614400)
		{

			if(move_uploaded_file ($file_path,'../../assets/images/'.$file_name)){
				$sql = "UPDATE `article` SET image='$file_name' WHERE `article`.`article_id` = '$articleid' AND `article`.`userid` = '$userid'";
				echo $sql."<br>";
				$result = mysqli_query($conn, $sql);

				

			}
		}

		header('location:index.php');

		/*$stmt = mysqli_prepare($conn,$sql);
		$stmt->bind_param("sssss",$userid, $topic1, $content1, $description1, $cmp_name1);
		$stmt->execute();*/

	}

?>	