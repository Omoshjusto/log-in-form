<?php

$name = $_GET['rusername'];
$email = $_GET['remail'];
$pass1 = $_GET['rpassword'];
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con){
    die("error : ".mysqli_connect());
}
$sql = "INSERT INTO `login`(`name`, `pass1`, `email`) VALUES ('$name','$pass1','$email');";
if (mysqli_query($con,$sql))
{
    echo "Registration Done successfully";
}
else{
    echo "something went wrong";
}






?>