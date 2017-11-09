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
            $updateTheTitle = $_POST["title_name"];
            $updateTheDescription = $_POST["description"];
            $updateTheCreator = $_POST["Creator"];
            $updateTheStars = $_POST["stars"];
            $updateTheRelease = $_POST["release_date"];
            $updateTheGenre = $_POST["genre"];



            if ($con) {
                // write the UPDATE query (update the values in the db)
                $query = "UPDATE titles SET description = '$updateTheDescription', title_name = '$updateTheTitle', Creator = '$updateTheCreator', stars = '$updateTheStars', release_date = '$updateTheRelease', genre = '$updateTheGenre' WHERE title_id = '$idOfMovie'";
                // echo $query;
                // run the query
                mysqli_query($con, $query);
                // close the connection
                mysqli_close($con);
                echo $updateTheTitle . " has been updated!";
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
