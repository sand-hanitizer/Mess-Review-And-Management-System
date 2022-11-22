<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>connecting database</title>
</head>
<body>
    <center>
    <div class="outter">
    <h1>Fill this form for your feedback</h1>
        <h4><em>your feedback matters!</em></h4>
        <hr width=30% color="red">
        <div class="form-box">
        
       <!--
        <form action="">
           <label for="enroll">Enrollment No.: </label><input type="text" name="enroll"><br>
            <label for="name">Name: </label><input type="text" placeholder="abc" name="name"><br>
            <label for="slot">Slot: </label><input type="text" placeholder="lunch" name="slot"><br>
            <label for="feedback">Review: </label><br><textarea col="10" rows="10" name="feedback" ></textarea><br>
            <label for="submit">Submit<input type="submit" name="submit"></label>
        </form>
-->     
        <form action="">
        <table cellspacing="4">
    <tr>
        <td><label for="enroll">Enrollment No.: </label></td>
        <td><input type="text" name="enroll"><br></td>
    </tr>
    <tr>
        <td><label for="name">Name: </label></td>
        <td><input type="text" placeholder="abc" name="name"></td>
    </tr>
    <tr>
        <td><label for="slot">Slot: </label></td>
        <td><input type="text" placeholder="lunch" name="slot"></td>
    </tr>
    <tr>
        <td><label for="feedback">Review: </label></td>
        <td><textarea col="10" rows="10" name="feedback" ></textarea></td>
    </tr>
    
</table>
<label for="submit"><input type="submit" name="submit"></label>
        </form>
        </div>
        <hr width=50% color="red">
    </div>
    </center>
</body>
</html>
<?php
$nm=$_GET['name'];
$enroll=$_GET['enroll'];

$sl=$_GET['slot'];
$rw=$_GET['feedback'];
$querry="insert into reviews values('$nm','$enroll','$sl','$rw')";

$data=mysqli_query($conn,$querry);
?>