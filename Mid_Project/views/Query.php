<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Room</title>
</head>
<body  background= "../model/white.jpg" >

 <font size="4"; color="white">	

	<center>
		<h1 style=" color: white; text-align:centre;">Receptionist</h1>
	</center>
	<?php include "../controller/Date.php" ?>

	<?php echo "<br>"; ?>

	<?php
echo " ". $_SESSION['user'];
?>

<center>
    <label for="username">Username:</label>
<input style="color: blue; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username">
<br>
<br>
	
		<label for="room"></label>
<textarea name="room" id="room" rows="6" cols="50" placeholder="Thank you for your query"></textarea>
<br>

			
	</center>
	<br>
	<center>
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Reply">
		<input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" onclick="history.go(-1);" type="button" value="Back">


	</center>
	
</form>
</font>
	</body>
</html>