<?php

session_start();
include '../../app/database/connect.php';
if(isset($_POST['register-btn'])){
	$userid = $_SESSION['userid'];
	$username1 = $_POST['username'];
	$cmp_name1 =$_POST['cmp_name'];
	$loc1 =$_POST['loc'];
	$join_date1 =$_POST['join_date'];
	$position1 =$_POST['position'];


	$q="UPDATE `emp_info` SET `username`='$username1', `cmp_name`='$cmp_name1', `loc` = '$loc1', `join_date`='$join_date1', `position`='$position1' WHERE `emp_info`.`userid` = '$userid'";
	$result = mysqli_query($conn, $q);

	if($result){
		echo "success";
	}
	else{
		echo "failed";
	}
}


/*$num = mysqli_num_rows($result);

if($num > 0){
  echo "Duplicate data";
}
else{
  $qy = " insert into emp_info(userid,username,cmp_name,loc,join_date,position) values('$userid','$username','$cmp_name', '$loc', '$join_date' , '$position')";
  mysqli_query($conn, $qy);
}*/
//header('location:../posts/index.php');
?>
