<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if (isset($_GET['submit'])){

	$username = $_GET['user'];
	$password = $_GET['password'];
	$f = fopen("../model/Registration.txt","r");
	$data = fread($f,filesize("../model/Registration.txt") );
	$data_filter = explode (",",$data);

	for ($i = 0; $i<count($data_filter);$i++){
		if($username==$data_filter[0] && $password==$data_filter[1] ){
$_SESSION['firstname']=$data_filter[2];
$_SESSION['lastname']=$data_filter[3];
$_SESSION['gender']=$data_filter[4];
$_SESSION['email']=$data_filter[5];
$_SESSION['user']=$data_filter[0];
header ('location: ../views/RHome.php');
}

else{
	echo "username or password is incorrect";
	}
}


};

?>
<br><br>




<br><br>
<form action="Logout.php" method="POST" >
	<input type="submit" value="Log out">
</form>
</body>
</html>