<?php


session_start();


require 'Includes/conFile.php';
require 'Includes/uploader.php';

$image =  basename( $_FILES['uploadedfile']['name']);
$title = $_POST["movieTitle"];
$creators = $_POST["creators"];
$desciption = $_POST["description"];
$embed = $_POST["embed"];
$genre = $_POST["genre"];
$stars = $_POST["stars"];
$releaseDate = $_POST["releaseDate"];
$type = 2;


$query = "INSERT INTO titles (embed, image, title_name, creator, description, genre, stars, release_date, type) VALUES ('$embed', '$image', '$title', '$creators', '$desciption', '$genre', '$stars', '$releaseDate', '$type')";
mysqli_query($con, $query);

header("location:TV.php");