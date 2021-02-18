<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
<div class="form">
<form action="reg.php" method="post">
<h2>Register</h2><br>
<div class="name">
<label>username: </label>
<input type="text" name="username" required="">
<div class="name">
<label>email</label>
<input type="text" name="email" id="email"
placeholder="vitap8255@gmail.com" required="" >
</div>
<div class="name">
<label>password</label>
<input type="password" name="password" required="">
 </div>
<div class="name">
<label>phonenumber</label>
<input type="number" name="phonenumber" required="">
</div>
<p>alderdy a user<a href="login.php"><b>LOG IN</b></a></p>
<button type="submit" name="create">Submit</button>
</form>
</div>
</body>
</html>