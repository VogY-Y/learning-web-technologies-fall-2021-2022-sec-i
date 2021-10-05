<html>
<body>
    <?php
    $name ="";
    $nameError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  }    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
}
?>

    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        NAME <br><br>
        <input type="text" name="name">
        <span class="error">* <?php echo $nameError;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
echo "<h1>Your Input:</h1>";
echo $name;

?>
</body>

</html>
