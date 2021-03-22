<?php
include("connection.php");


$USN=$_GET['rn'];
$query = "DELETE FROM registration WHERE USN = '$USN'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo"<font color='red'>Record Deleted";
}
else
{
	echo"<font color='green'>Record not Deleted";
}

?>