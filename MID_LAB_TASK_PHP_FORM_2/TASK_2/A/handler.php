<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com";

    }
?>

<html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
Email: <br><br><input type="text" name="email"><br>
<br><table border="1" width="180"> </table>
<br><input type="submit" name="submit" value="Submit">
</form>

</body>
</html>