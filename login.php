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
        ?>

        <main>
            <h1>Login</h1>
            <?php
            if ($_GET) {
                $error = $_GET["error"];
                echo "<span id='error'>" . $error . "</span>";
            }
            ?>
            <form action="doLogin.php" method="POST"/>
            <label>Username:</label>
            <input type="text" name="userName" required autofocus/><br/>

            <label>Password:</label>
            <input type="password" name="passWord" required autofocus/><br/>

            <input type="submit" name="submit" value ="Login"/>
        </form>
    </main>
    <?php
    include 'Includes/footer.php';
    ?>
</body>
</html>
