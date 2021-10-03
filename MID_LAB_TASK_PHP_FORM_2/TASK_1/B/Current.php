<?php
	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
		
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Name: <br><br><input type="text" name="myname" value="<?php if(isset($name)){ echo $name; }?>"/><br><br>
		<table border="1"width="180"> </table>
		<br><input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>