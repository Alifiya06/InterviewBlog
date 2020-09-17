<?php

session_start();
include '../../app/database/connect.php';
$userid = $_SESSION['userid'];
$username = $_POST['username'];
$cmp_name =$_POST['cmp_name'];
$loc =$_POST['loc'];
$join_date =$_POST['join_date'];
$position =$_POST['position'];


$q="select * from emp_info where username = '$username'and cmp_name = '$cmp_name' and loc='$loc' and join_date = '$join_date'and position = '$position'";
$result = mysqli_query($conn, $q);


$num = mysqli_num_rows($result);

if($num > 0){
  echo "Duplicate data";
}
else{
  $qy = " insert into emp_info(userid,username,cmp_name,loc,join_date,position) values('$userid','$username','$cmp_name', '$loc', '$join_date' , '$position')";
  mysqli_query($conn, $qy);
}
header('location:../posts/index.php');
?>
