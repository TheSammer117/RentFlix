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
        <main>
            <br/>
            <h1> <img src="Images/Logo.jpg" alt="logo"/>    Who Are We?</h1>
            <p>Rent-Flix is new to the digital TV market, and we provide a 24/7 online rental service for streaming TV shows and Movies.
                We opened our service to the public in April of 2016 and we have been getting great feedback from customers about our HD streaming service which 
                has almost a 0% occurrence of buffering.</p>

            <h1>Why choose us?</h1>
            <p>We guarantee a 24/7 service with no crashes so far. We have 24/7 365 days a year technical support team who are always ready to answer your
                questions or guide you through your problems with our service. Please feel free to contact them anytime, they enjoy helping you.</p>

            <?php
            include "Includes/slideshow.php";
            ?>
        </main>
        <?php
        include 'Includes/footer.php';
        ?>
    </body>
</html>
