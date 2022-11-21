<?php
$con=mysqli_connect("localhost","root","","mess_management");
if(!$con){
    echo "Failed to connect";
}else{
    echo "successfully connected to database ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>connecting database</title>
</head>
<body>
    <center>
        <h1>Fill this form for your feedback</h1>
        <h4><em>your feedback matters!</em></h4>
        <hr width=30% color="red">
        <form action="">
            <label for="id">ID: </label><input type="text"><br>
            <label for="Name">Name: </label><input type="text" placeholder="abc"><br>
            <label for="Branch">Branch: </label><input type="text" placeholder="DSAI"><br>
            <label for="Name">Slot: </label><input type="text" placeholder="lunch"><br>
            <label for="Name">Review: </label><br><textarea col="10" rows="10" ></textarea><br>
            <label for=""><input type="submit"></label>
        </form>
        <hr width=50% color="red">
    </center>
</body>
</html>