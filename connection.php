<?php
$SName="localhost";
$UName="root";
$Pass="";
$DBName="testid";

$conn=mysqli_connect($SName,$UName,$Pass);

if(!$conn)
{
echo("unable to connect");
die();
}
$DB=mysqli_select_db($conn,$DBName);

if(!$DB)
{
	echo("unable to connecet with databse");
die();
}
?>
