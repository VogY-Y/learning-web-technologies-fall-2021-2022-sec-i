<html>
<body>
    <?php
    $degree = "";
    $degreeError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (empty($_POST["degree"])) {
    $degreeError = "at least two of them must be selected";
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
        <input type="radio" name="degree" value="SSC">SSC
        <input type="radio" name="degree" value="HSC">HSC
        <input type="radio" name="degree" value="BSc">BSc
        <input type="radio" name="degree" value="MSc">MSc
        <span class="error">* <?php echo $degreeError;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
echo "<h1>Your Degree</h1>";
echo $degree; 
?>
</body>

</html>
