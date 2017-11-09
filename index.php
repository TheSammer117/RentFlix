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

                if ($con) {
                    $query = "SELECT * FROM titles WHERE type = '1'";

                    $result = mysqli_query($con, $query);

                    while ($db_field = mysqli_fetch_assoc($result)) {
                        echo "<a href='movie.php?id=" . $db_field["title_id"] . "'/>" . "<img class='thumbnail' src='uploads/" . $db_field["image"] . "'/></a>";
                    }
                }




                $query = "SELECT * FROM titles WHERE type = '2'";

                $result = mysqli_query($con, $query);

                while ($db_field = mysqli_fetch_assoc($result)) {
                    echo "<a href='show.php?id=" . $db_field["title_id"] . "'/>" . "<img class='thumbnail' src='uploads/" . $db_field["image"] . "'/></a>";
                }
                ?>



            </main>





            <?php
            include 'Includes/footer.php';
            ?>


        </div>
    </body>
</html>
