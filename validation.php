<?php

session_start();


$con = mysqli_connect('localhost','root','123456',);

mysqli_select_db($con, 'useregistration');

$name = $_POST['user'];
$pass =$_POST['password'];

$s = " SELECT * FROM usertable WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
header('location:home.php');
	
}else{
	header('location:login.php');
}

?>