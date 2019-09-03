<?php

session_start();
header('location:login.php');

$con = mysql_connect('localhost','root','123456');

mysqli_select_db($con, 'useregistration');

$name = $_POST['user'];
$pass =$_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" username already exist";

	
}else{
	$reg= " insert into usertable(name , password) values ('$name' , '$password')";
	mysqli_query($con, $reg);
	echo" registration successful";
}

?>