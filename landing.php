<!DOCTYPE html>
<?php
require 'Includes/conFile.php';
session_start();
$user_status = 0;
if (empty($_SESSION["login_user"])) {
    header("location:login.php");
} else {
    $username = $_SESSION["login_user"];
    $type = $_SESSION["user_type"];
    if ($type == 1) {
        header("location:admin.php");
    }
}
?>
<html>
    <?php
    include 'Includes/head.php';
    ?>
    <body>
        <?php
        include 'Includes/header.php';
        ?>

        <main>
            <?php
            echo "Welcome " . $_SESSION["login_user"];
            ?>
        </main>
        <?php
        include 'Includes/footer.php';
        ?>
    </body>
</html>
