<?php
require 'Includes/conFile.php';
$query = "SELECT * FROM memberinfo WHERE username = '$username'";

$result = mysqli_query($con, $query);
$db_field = mysqli_fetch_assoc($result);
?>
<header>
    <h1><a href="index.php"><img id="logo" src="Images/Logo.jpg" alt="Logo"</a></h1>

    <nav>
        <ul>
            <li><a class="button" href="index.php">Home</a></li>
            <li><a class="button" href="movies.php">Movies</a></li>
            <li><a class="button" href="TV.php">TV</a></li>
                <?php
                if ((empty($_SESSION["login_user"]))) {
                    echo "<li><a href='login.php'>Login</a></li>";
                }

                if ((empty($_SESSION["login_user"]))) {
                    echo "<li><a href='signUp.php'>Sign-Up</a></li>";
                }

                if (!(empty($_SESSION["login_user"]))) {
                    echo "<li><a href='rent.php'>Rent a Flick</a></li>";
                }

                if (!(empty($_SESSION["login_user"]))) {
                    echo "<li><a class='adminBtn' href='admin.php'>Admin</a></li>";
                }

                if (!(empty($_SESSION["login_user"]))) {
                    echo "<li><a href='logout.php'>Log Out</a></li>";
                }
                ?>
        </ul>
    </nav>

    <nav>
        <ul>
            <?php
            if (!(empty($_SESSION["login_user"]))) {
                $username = $_SESSION["login_user"];
                echo "<li id='user'>" . $username . "</li>";
            }
            ?>
        </ul>
    </nav>

    <?php
//    session_start();
//    $username = $db_field["username"];
//    $_SESSION["login_user"] = $username;
//    $Query = "SELECT username FROM memberinfo WHERE username = '$username'";
//    
//    mysqli_query($con, $query);
    ?>

</header>

