<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 <img src="logo2.png" alt="logo2" class="center">
 <div class="box">
 <div class="inputbox">
 <form action="login.php" method="post">
<h2>Login</h2><br>
 <div>
 <label>Username</label>
<input type="text" name="username" required="">
 </div>
 <div>
 <label>password</label>
 <input type="password" name="password" required="">
 </div>
 <button type="submit" name="login">Submit</button></br></br>

 <a href="reg.php"><b>register</b></a>

 </form>
 </div>
</div>
</body>
</body>
</html>