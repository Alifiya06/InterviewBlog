<?php

session_start();
header('location:login.php');

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
$year = $_POST['year'];
$email = $_POST['email'];
$college= $_POST['college'];
$dob = $_POST['dob'];

$q="select * from user where name = '$name'and password = '$pass' and year='$year' and email = '$email'and college = '$college' and dob = '$dob'";
$result = mysqli_query($conn, $q);


$num = mysqli_num_rows($result);

if($num === 1){
  echo "Duplicate data";
}
else{
  $qy = " insert into user(name,password,email,year,college,dob) values('$name','$pass', '$email', '$year' , '$college','$dob')";
  mysqli_query($conn, $qy);
}

?>
