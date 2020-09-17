<?php

session_start();
//header('location:login.php');
if(!isset($_POST['name'])){
	header('location:login.php');
}

$conn = mysqli_connect('localhost','root', "");
/*if($conn){
  echo "connection success";
}
else{
  echo "no connection";
}*/

mysqli_select_db($conn, 'interviewblog');

$name = $_POST['name'];
$pass = $_POST['password'];
//$pass  = md5($pass);
/*$year = $_POST['year'];
$email = $_POST['email'];
$college= $_POST['college'];
$dob = $_POST['dob'];*/

$q="select * from user where name='$name' and password='$pass'";

echo $q;



$result = mysqli_query($conn, $q);
print_r($result);
$arr = mysqli_fetch_array($result);
print_r($arr);

$num = mysqli_num_rows($result);

if($num > 0){
  $_SESSION['userid'] = $arr['userid'];
  $_SESSION['year'] = $arr['year'];
  $_SESSION['name'] = $arr['name'];


  echo $_SESSION['userid'];
  header('location:index.php');
}
else{
  header('location:register.php');
}

?>
