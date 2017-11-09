<?php
session_start();
if (empty($_SESSION["login_user"])) {
    header("location:login.php");
} 
?>
<html>
    <?php
    include "Includes/head.php";
    ?>
    <body>
        <?php
        include 'Includes/header.php';
        ?>
        <main>

            <fieldset><legend>Rent a Title</legend>
                <form action="doRent.php" method="POST">
                    <input type="submit" value="Rent" name="rentTitle"/>

                    <select name="rentTitle">
                        <?php
                        require 'Includes/conFile.php';

                        if ($con) {
                            $query = "SELECT title_id, title_name FROM titles";


                            $result = mysqli_query($con, $query);
                            // loop through the results
                            while ($db_field = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $db_field["title_id"] . "'>" . $db_field["title_name"] . "</option>";
                            }
                            // close the connection
                            mysqli_close($con);
                        } else {
                            
                        }
                        ?>
                    </select>
                </form>
            </fieldset>
        </main>
        <?php
        include 'Includes/footer.php';
        ?>
    </body>
</html>
