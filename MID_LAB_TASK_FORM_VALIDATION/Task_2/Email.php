<html>
<body>
    <?php
$Email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Email = test_input($_POST["email"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        EMAIL<br><br>
        <input type="text" name="email">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
echo "<h1>Your email is</h1>";
echo $Email;

?>
</body>
</html>
