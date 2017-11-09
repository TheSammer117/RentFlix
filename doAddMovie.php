<?php


session_start();


require 'Includes/conFile.php';
require 'Includes/uploader.php';

$image =  basename( $_FILES['uploadedfile']['name']);
$title = $_POST["movieTitle"];
$desciption = $_POST["description"];
$embed = $_POST["embed"];
$director = $_POST["director"];
$writer = $_POST["writer"];
$genre = $_POST["genre"];
$stars = $_POST["stars"];
$releaseDate = $_POST["releaseDate"];
$type = 1;


$query = "INSERT INTO titles (image, embed, title_name, description, director, writer, genre, stars, release_date, type) VALUES ('$image', '$embed', '$title', '$desciption', '$director', '$writer', '$genre', '$stars', '$releaseDate', '$type')";
mysqli_query($con, $query);

header("location:movies.php");