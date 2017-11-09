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

            $deleteThisTitle = $_POST["deleteTitle"];

            if ($con) {
                //write our query
                $query = "DELETE FROM titles WHERE title_id = '$deleteThisTitle'";
                //run our query
                mysqli_query($con, $query);
                mysqli_close($con);

                header("location:index.php");
            } else {
                echo "ERROR: Unable to find database";
            }
            ?>
        </main>
        <?php
        include 'Includes/footer.php';
        ?>
    </body>
</html>
