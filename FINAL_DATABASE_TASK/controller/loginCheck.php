<?php 
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				$status = validate($username, $password);
				
				if ($status) {
					setcookie('flag','true',time()+3600,'/');
					header('location: ../views/home.php');
				
				/*$con = mysqli_connect('localhost','root','','webtech');
				$sql = "select * from users where username='{$username}' and password='{$password}'";
				$result = mysqli_query($con,$sql);
				$data = mysqli_fetch_assoc($result);
				//print_r($data);

				if ($username == $data['username'] && $password == $data['password']) {
					setcookie('flag','true',time()+3600,'/');
					header('location: ../views/home.php');*/
				}else{
					header('location: ../views/login.html');
				}

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>