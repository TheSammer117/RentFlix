<?php

require 'Includes/conFile.php';

$username = $_POST["userName"];
$password = $_POST["passWord"];

$query = "SELECT * FROM memberinfo WHERE username = '$username'";

$result = mysqli_query($con, $query);

if($result == NULL){
    header("location:login.php?error=Incorrect <strong>Username</strong> or <strong>Password</strong><br/>");
} else {
    $db_field = mysqli_fetch_assoc($result);
    if($db_field["password"]!=$password){
        header("location:login.php?error=Incorrect <strong>Username</strong> or <strong>Password</strong><br/>");
    } else {
        session_start();
        
        $_SESSION["login_user"] = $username;
        $_SESSION["user_type"] = $db_field["type"];
        header("location:landing.php");
        mysqli_close($con);
    }
}

