<?php
require 'Includes/conFile.php';
$query = "SELECT * FROM memberinfo WHERE username = '$username'";

$result = mysqli_query($con, $query);
$db_field = mysqli_fetch_assoc($result);

session_start();

if (empty($_SESSION["login_user"])) {
    header("location:login.php");
} else {
    $username = $_SESSION["login_user"];

    $type = $_SESSION["user_type"];
    if ($type != 1) {
        header("location:login.php?error=You don't have permission to access this page!<br/>");
    }
}
//if($type != 1){
//  header("location:index.php");
//} 
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





            <fieldset><legend>Add a Movie</legend>

                <form action="doAddMovie.php" method="POST" enctype="multipart/form-data" />
                <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                Choose a file to upload: <input name="uploadedfile" type="file" /><br />


                <label>Movie Title:</label>
                <input type="text" name="movieTitle" required autofocus/><br/>

                <label>Description:</label>
                <input type="text" name="description" required/><br/>

                <label>Trailer Embed:</label>
                <input type="text" name="embed" required/><br/>

                <label>Director:</label>
                <input type="text" name="director" required /><br/>

                <label>Writer:</label>
                <input type="text" name="writer" required /><br/>

                <label>Genre:</label>
                <input type="text" name="genre" required /><br/>

                <label>Stars:</label>
                <input type="text" name="stars" required /><br/>

                <label>Release Date(yyyy-mm-dd):</label>
                <input type="text" name="releaseDate" required /><br/>

                <input type="submit" name="submitMovie" value="Add Movie" />
                </form>


                <form  action="updateMovie.php" method="POST">
                    <input type="submit" value="Update a Movie" name="updateMovie"/>
                    <!--<input type="text" name="updateGame" placeholder="Enter the ID of a Game" required />-->
                    <select name="updateTitle">
                        <?php
                        require 'Includes/conFile.php';

                        if ($con) {
                            // write the query to retrieve all games from the db
                            $query = "SELECT title_id, title_name FROM titles WHERE type = '1'";
                            // run the query
                            $result = mysqli_query($con, $query);
                            // loop through the results
                            while ($db_field = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $db_field["title_id"] . "'>" . $db_field["title_name"] . "</option>";
                            }
                            // close the connection
                            mysqli_close($con);
                        } else {
                            // output no results
                        }
                        ?>

                    </select>    
            </fieldset>
        </form>
        <fieldset><legend>Add a TV Show</legend>

            <form action="doAddShow.php" method="POST" enctype="multipart/form-data" />
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            Choose a file to upload: <input name="uploadedfile" type="file" /><br />

            <label>TV Show Title:</label>
            <input type="text" name="movieTitle" required autofocus/><br/>

            <label>Description:</label>
            <input type="text" name="description" required/><br/>

            <label>Trailer Embed:</label>
            <input type="text" name="embed" required/><br/>

            <label>Creators:</label>
            <input type="text" name="creators" required /><br/>

            <label>Genre:</label>
            <input type="text" name="genre" required /><br/>

            <label>Stars:</label>
            <input type="text" name="stars" required /><br/>

            <label>Release Date(yyyy-mm-dd):</label>
            <input type="text" name="releaseDate" required /><br/>

            <input type="submit" name="submitMovie" value="Add TV Show" />
            </form>



            <form  action="updateShow.php" method="POST">
                <input type="submit" value="Update a TV Show" name="updateShow"/>

                <select name="updateShow">
                    <?php
                    require 'Includes/conFile.php';

                    if ($con) {
                        // write the query to retrieve all games from the db
                        $query = "SELECT title_id, title_name FROM titles WHERE type = '2'";
                        // run the query
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
        </fieldset>
    </form>


    <fieldset><legend>Delete a title</legend>
        <form action="deleteTitle.php" method="POST">
            <input type="submit" value="Delete a title" name="deleteTitle"/>

            <select name="deleteTitle">
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
