<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				if($email !=""){
			
					$con = mysqli_connect('localhost','root','','webtech');
					$sql = "insert into users values('','{$username}','{$password}','{$email}','user')";
					if(mysqli_query($con,$sql)){
					header('location:../views/login.html');
					}else{
						echo "try again..";
					}
					
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>