
<?php
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$USN = $_POST['USN'];
	$Phone = $_POST['Phone'];
	$Department = $_POST['Department'];
	$Sem = $_POST['Sem'];
        $Sec = $_POST['Sec'];
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	

	// Database connection
	$conn = new mysqli('localhost','root','','testid');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(first_name, last_name, USN, Phone, Department, Sem, Sec, image) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisiss", $first_name, $last_name, $USN, $Phone, $Department, $Sem, $Sec, $file);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>

<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px">

    <?php 
     include('database connection.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=login.php">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!...</span>';

    ?>
    </div>

</body>
</html>
      