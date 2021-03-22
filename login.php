<!DOCTYPE html>
<html>
<head>

    <title>Login page</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
<a href ="admin.php">ADMIN</a>
<div class="container">
<div class="login-box">
<div class="row">
<div class ="col-mid-6 login-left">

    <h2>Login</h2>

<form action="login process.php" method="POST">

<div class="form-group">
<label>Enter USN</label>

    <input type="text" name="username"  class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
    <input type="password" name="password" class="form-control" required>
</div>

    <button type="submit" class="btn btn-primary"> login</button>
</form>
</div>


<div class ="col-mid-6 login-right">

    <h2>Register here</h2>

<form action="registration.php" method="POST">

<div class="form-group">
<label>USN </label>

    <input type="text" placeholder="University Seat No" name="username" pattern="[0-1]{1}[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}" title="Wrong USN Format"class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
    <input type="password" name="password" class="form-control" required>
</div>

    <button type="submit" class="btn btn-primary"> Register</button>
<form onsubmit="validate()">

</form>
</form>
</div>

</div>


</div>
</body>
</html>