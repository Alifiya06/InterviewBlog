<?php

session_start();
//header('location:login.php');

$conn = mysqli_connect('localhost','root');
/*if($conn){
  echo "connection success";
}
else{
  echo "no connection";
}*/

mysqli_select_db($conn, 'interviewblog');

$name = $_POST['name'];
$pass = $_POST['password'];
/*$year = $_POST['year'];
$email = $_POST['email'];
$college= $_POST['college'];
$dob = $_POST['dob'];*/

$q="select * from user where name = '$name'and password = '$pass'";
$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){
  //$_SESSION['name'] = $name;
  header('location:index.php');
}
else{
  header('location:register.php');
}

?>
