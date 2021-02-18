<?php
		if(isset($_POST['create']))
		{
			$username =$_POST['username'];
			$completename =$_POST['completename'];
			$email =$_POST['email'];
			$password =$_POST['password'];
			$number =$_POST['number'];

			$conn = new mysqli('localhost' ,'root','','tests');
			if($conn->connect_error){
				die('connection failed: '.$conn->connect_error);
			}
			else{
				$stmt= $conn->prepare("insert into registration(username,completename,email,password,number) values(?,?,?,?,?)");
				$stmt->db2_bind_param("ssssi",$username,$completename,$email,$password,$number);
				$stmt->execute();
				echo "done successfully";
				$stmt->close();
				$conn->close();

			}
		}
		?>