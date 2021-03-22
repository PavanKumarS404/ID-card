<?php 

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$username=$_POST['username'];
$password=$_POST['password'];

$s = "select * from user where username='$username' && password='$password'";

$result = mysqli_query($con, $s);

$counter = mysqli_num_rows($result);

 if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
            document.location='login.php'</script>";
         }
         else
         {
           
            $_SESSION['username']=$username;

            echo "<script type='text/javascript'>document.location='home.php'</script>";
         }



?>