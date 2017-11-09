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
        ?>
        <div id ="container">
            <?php
            include 'Includes/aside.php';
            ?>
            <main>

                <?php
                require "Includes/conFile.php";

                $movie = $_GET["id"];

                if ($con) {
                    $query = "SELECT * FROM titles WHERE title_id = '$movie'";

                    $result = mysqli_query($con, $query);

                    while ($db_field = mysqli_fetch_assoc($result)) {
                        echo "<img class='thumbnail' src='uploads/" . $db_field["image"] . "'/>";

                        echo "<iframe class = 'trailer' width = '535' height = '262'
                        src = 'http://www.youtube.com/embed/" .$db_field["embed"]."'>
                        </iframe>";

                        echo "<p class='desc'>" . $db_field["description"] . "</p>" . "<br/>Director: " . $db_field["director"]
                        . "<br/>Writer: " . $db_field["writer"] . "<br/>Genre: " . $db_field["genre"] . "<br/>Genre: " . $db_field["stars"] .
                        "<br/>Release Date: " . $db_field["release_date"];
                    }
                }
                ?>




            </main>

            <?php
            include 'Includes/footer.php';
            ?>
        </div>
    </body>
</html>
