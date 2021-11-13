<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Dinning</title>
</head>
<body  background= "../model/white.jpg" >
    <font size="4"; color="white">
    <center>
        <br>
        <h3 style=" color: orangered; text-align:centre;">Food Category</h3>
        
    </center>
    <?php
echo " ". $_SESSION['user'];
?>
<center>
    <br>
    <br>
    <label style="color: orangered;" for="username">Username:</label>
<input style="color: orangered; font-size : 10px; width: 90px; height: 20px;" type="text" name="username" id="username" required>
<br><br>
    
    <table border="4">
        <tr>
            <td>
                <img src="../model/biriyani.jpg" width="250" height="250">
            </td>
            <td>
                <img src="../model/rice.jpg" width="250" height="250">
            </td>
            <td>
                <img src="../model/chicken.jpg" width="250" height="250">
            </td>

        </tr>
        <label for="Type" > </label>
        <tr style="font-family: 'Cooper Black'; color: orangered; font-size : 18px;">
            <td>400 BDT</td>
            <td>160 BDT</td>
            <td>240 BDT</td>

        </tr>
        
        <tr style="font-family: 'Cooper Black'; color: orangered; font-size : 20px;">
            <td> <input type="radio" name="Type" id="Biriyani" value="Biriyani">
                <label for="Biriyani">Biriyani</label>

            </td>
            <td>
            <input type="radio" name="Type" id="Rice" value="Rice">
                <label for="Rice">Rice</label> 
            </td>
            <td>
                <input type="radio" name="Type" id="Chicken" value="ChickenCurry">
                <label for="Chicken">Chicken Curry</label> 
            </td>
            
        </tr>
     
    </table>
    <br>

    <table border="4">
        <tr>
            <td>
                <img src="../model/beef.jpg" width="250" height="250">
            </td>
            <td>
                <img src="../model/fish.jpg" width="250" height="250">
            </td>
            <td>
                <img src="../model/vegetable.jpg" width="250" height="250">
            </td>

        </tr>
        <label for="Type" > </label>
        <tr style="font-family: 'Cooper Black'; color: orangered; font-size : 18px;">
            <td>400 BDT</td>
            <td>200 BDT</td>
            <td>80 BDT</td>
            
        </tr>
        
        <tr style="font-family: 'Cooper Black'; color: orangered; font-size : 20px;">
            <td> <input type="radio" name="Type" id="Beef" value="Beef">
                <label for="Beef">Beef</label>

            </td>
            <td>
            <input type="radio" name="Type" id="Fish" value="FishFry">
                <label for="Fish">Fish Fry</label> 
            </td>
            <td>
                <input type="radio" name="Type" id="vegetable" value="ChineseVegetables">
                <label for="vegetable">Chinese Vegetables</label> 
            </td>         

        </tr>
     
    </table>
    </center>
    <br>
    <center>
        <input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Send Request">
        <input style="font-family: 'Cooper Black'; color: black; font-size : 15px; width: 80px; height: 30px;" onclick="history.go(-1);" type="button" value="Back">

    </center>
</form>
</font>
    </body>
</html