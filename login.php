<?php
$name = $_POST['username'];
$pass1 = $_POST['password'];

//database connection
$con = new mysqli("localhost","root","","test_db");
if ($con->connect_error) {
    die("Failed to connect : ".$on->connect_error);
}else {
    $stmt = $con->prepare("select * from login where email = ?");
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $pass1) {
            echo "<h2>Login successfully</h2>";
        } else {
            echo "<h2>invalid Email or password</h2>";
        }

    }else{
        echo "<h2>invalid Email or password</h2>";
          }
}


?>