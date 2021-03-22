<?php 

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$username=$_POST['username'];
$password=$_POST['password'];

$s = "select * from user where username='$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"<script> alert('USN already Exists')</script>";
	
}else{
	$reg="insert into user(username, password) values('$username','$password') ";
	mysqli_query($con, $reg);
	echo"Registration Succesful";
}

?>
