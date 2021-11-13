<!DOCTYPE html>
<html>
<head>
    <title>Registration Form  </title>
</head>
<body>

    <h1>Registration Form </h1>

    <?php 

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $User = $_POST['user'];
        $Password = $_POST['Password'];
        

        echo "Your First Name Is : $firstName  ";
 
        echo "Your Last Name Is : $lastName ";
        echo"<br>";
        echo "You Are : $gender";
        echo "<br>";
        echo "Your Entered Email Is : $email";

    
        $f = fopen("../model/Registration.txt","a");
         fwrite($f, $User. "," .$Password."," .$firstName."," .$lastName."," .$gender."," .$email.",\n");
        
        fclose($f);

        header ('Location: ../views/Login.html');
        exit;

    ?>

</body>
</html>