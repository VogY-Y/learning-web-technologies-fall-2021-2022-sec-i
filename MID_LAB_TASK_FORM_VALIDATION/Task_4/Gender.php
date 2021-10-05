<html>
<body>
    <?php
    $gender = "";
    $genderError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (empty($_POST["gender"])) {
    $genderError = "at least one of them must be selected";
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
        GENDER<br><br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderError;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
echo "<h1>Your Gender</h1>";
echo $gender; 
?>
</body>

</html>
