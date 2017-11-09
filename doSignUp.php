<?php

require 'Includes/conFile.php';

$username = $_POST["userName"];
$password = $_POST["pass1"];
$password2 = $_POST["pass2"];

$query = "SELECT * FROM memberinfo WHERE username = '$username'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    header("location:signUp.php?error=Username already exists");
} else if ($password != $password2) {
    header("location:signUp.php?error=Passwords Don't match");
} else {
    $query = "INSERT INTO memberinfo (username, password) VALUES ('$username', '$password')";
    header("location:login.php");
    mysqli_query($con, $query);
}

session_start();
$_SESSION["login_user"] = $username;
$_SESSION["user_status"] = 0;
mysqli_close($con);
