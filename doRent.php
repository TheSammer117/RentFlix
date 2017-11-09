<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            session_start();

            $username = $_SESSION["login_user"];
            $rentThisTitle = $_POST["rentTitle"];
         //   $timestamp = date('Y-m-d G:i:s');

            if ($con) {
                //write our query
                $query = "INSERT INTO user_titles (username, title_id) VALUES ('$username', '$rentThisTitle')";
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
