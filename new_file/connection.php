<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mess";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "Connection established";
}
else{
    echo "Connection failed";
}
?>