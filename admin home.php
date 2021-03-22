<!DOCTYPE html>
<html>
<head><title>Admin Home</title>
<style type="text/css">


th{
	background-color: #588c7e;
	color: white;
}
table{
	border-collapse: collapse;
	width: 60%;
	
	font-size: 15px;
	text-align: center;
}
</style>
</head>
<body>
<a href ="admin.php">LOGOUT</a>
<?php
$conn=mysqli_connect("localhost","root","","testid");
if ($conn-> connect_error){
die("Connection failed:". $conn-> connect_error);
}
$res=mysqli_query($conn, "SELECT USN,first_name, last_name, Phone, Department, Sem, Sec   from registration");

print "<center><table cellspacing=2 cellpadding=3 border=1>";
print "<tr><th>Slno</th><th>USN</th><th>First Name</th><th>Last Name</th><th> Phone</th><th> Department</th><th> Semester</th><th>Section</th><th>Operation</th>";
print"</tr>";
$i=1;
while($row = mysqli_fetch_array($res))
{
	print "<tr><td>$i</td><td>".$row['USN']."</td><td>".$row['first_name']."</td>";
	print "<td>".$row['last_name']."</td><td>".$row['Phone']."</td><td>".$row['Department']."</td><td>".$row['Sem']."</td><td>".$row['Sec']."</td><td><a href= 'delete.php?rn=$row[USN]'>Delete</td></tr>";
$i++;
}
 $conn->close();
?>
</body>
</html>

	;