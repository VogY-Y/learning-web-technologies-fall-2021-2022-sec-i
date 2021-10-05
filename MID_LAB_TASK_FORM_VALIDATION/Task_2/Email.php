<html>
<body>
    <?php
    $email = "";
    $emailError ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }
}
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        EMAIL<br><br>
        <input type="text" name="email">
        <span class="error">* <?php echo $emailError;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
echo "<h1>Your Input:</h1>";
echo $email;
?>
</body>

</html>
