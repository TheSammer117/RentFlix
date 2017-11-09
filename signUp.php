<script>

</script>
<html>
    <?php
    include 'Includes/head.php';
    ?>

    <body>
        <?php
        include 'Includes/header.php';
        ?>
        <main>
            <h1>Sign-Up Here:</h1>
            <?php
            if ($_GET) {
                $error = $_GET["error"];
                echo "<span id='error'>" . $error . "</span>";
            } else if ($_GET) {
                $error = $_GET["error2"];
                echo "<span id='error'>" . $error . "</span>";
            }
            ?>
            <form action="doSignUp.php" method="POST"/>
            <label>Username:</label>
            <input type="text" name="userName" required autofocus/><br/>

            <label>Password:</label>
            <input type="password" name="pass1"  id="pass1" required autofocus/><br/>

            <label>Confirm Password:</label>
            <input type="password" name="pass2" id="pass2" required autofocus/><br/>


            <input type="submit" name="submit" value ="Sign-Up"/>
        </form>
    </main>
        
    <?php
    include 'Includes/footer.php';
    ?>

</body>
</html>
