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

                $updateSomeShow = $_POST["updateShow"];


                if ($con) {
                    $query = "SELECT * FROM titles WHERE title_id = '$updateSomeShow'";

                    $result = mysqli_query($con, $query);

                    while ($db_field = mysqli_fetch_assoc($result)) {
                        $updateTheTitle = $db_field["title_name"];
                        $updateTheDescription = $db_field["description"];
                        $updateTheCreator = $db_field["Creator"];
                        $updateTheStars = $db_field["stars"];
                        $updateTheRelease = $db_field["release_date"];
                        $updateTheGenre = $db_field["genre"];
                    }

                    // close the connection
                    mysqli_close($con);
                } else {
                    echo "Error: Unable to find database.";
                }
                ?>

                <form action="updateShowForm.php" method="POST">
                    <input type="hidden" name="title_id" value="<?php echo $updateSomeMovie; ?>"/>
                    <label>Title of Movie:</label>
                    <input type="text" name="title_name" value="<?php echo $updateTheTitle; ?>" size="35" required /><br/>
                    <label>Description:</label>
                    <input type="text" name="description" value="<?php echo $updateTheDescription; ?>"  size="120" required /><br/>
                    <label>Director:</label>
                    <input type="text" name="Creator" value="<?php echo $updateTheCreator; ?>" size="40" required /><br/>
                    <label>Writer:</label>
                    <input type="text" name="stars" value="<?php echo $updateTheStars; ?>" size="70" required /><br/>
                    <label>Release Date:</label>
                    <input type="date" name="release_date" value="<?php echo $updateTheRelease; ?>"  required /><br/>
                    <label>Genre:</label>
                    <input type="text" name="genre" value="<?php echo $updateTheGenre; ?>" size="35" required /><br/>

                    <input type="submit" value="Update" name="updateTitle"/>
                </form>

            </main>





            <?php
            include 'Includes/footer.php';
            ?>


        </div>
    </body>
</html>
