<?php
	$inputuser = $_POST['username'];
	$inputpass=$_POST['password'];
	$username ="";
	$password ="";
$connect = mysql_connect("localhost",$username,$password);
mysql_select_db($login) or ("databse not found");

$query ="SELECT * FROM 'users' WHERE 'username'='$inputuser'";
$querypass = "SELECT * FROM 'users' WHERE 'password'='$inputpass'";

echo $query;
echo $querypass;

mysql_close();
	
?>