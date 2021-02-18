<?php 
session_start();

$username = "";
$email = "";

$errors=array();

$db =mysqli_connect('localhost','root','','practices') or die("could not connect");

if(isset($_POST['login'])){
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);

}

if(empty($username)) 
{
	array_push($errors,"username is required");
}

if(empty($password)) 
{
	array_push($errors,"password is required");
}

	if(count($errors) == 0)
	{
		$passwords=md5($password);
		$deepak = "SELECT * FROM user2 WHERE username ='$username' AND password='$password' ";
		$results = mysqli_query($db,$deepak);
		if(mysqli_num_rows($results))
		{
			$_SESSION['username']=$username;
			$_SESSION['success']="you are now logged in";
			header("location:Mainpage.php");
		}
		else
		{
			array_push($errors,"wrong password");
		}
	}

?>