<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <?php
    include 'Includes/head.php';
    ?>

    <body>
        <?php
        include 'Includes/header.php';

        include 'Includes/aside.php';
        ?>
        <main>
            <?php
            require 'Includes/conFile.php';

            $idOfMovie = $_POST["title_id"];
            $descriptionOfMovie = $_POST["description"];
            $titleOfMovie = $_POST["title_name"];
            $directorOfMovie = $_POST["director"];
            $writerOfMovie = $_POST["writer"];
            $starsOfMovie = $_POST["stars"];
            $releaseOfMovie = $_POST["release_date"];
            $genreOfMovie = $_POST["genre"];



            if ($con) {
                // write the UPDATE query (update the values in the db)
                $query = "UPDATE titles SET description = '$descriptionOfMovie', title_name = '$titleOfMovie', director = '$directorOfMovie', writer = '$writerOfMovie', stars = '$starsOfMovie', release_date = '$releaseOfMovie', genre = '$genreOfMovie' WHERE title_id = '$idOfMovie'";
                // echo $query;
                // run the query
                mysqli_query($con, $query);
                // close the connection
                mysqli_close($con);
                echo $titleOfMovie . " has been updated!";
            } else {
                echo "Error: Unable to connect to the database!";
            }
            ?>
        </main>
        <?php
        include 'Includes/footer.php';
        ?>
    </body>
</html>
