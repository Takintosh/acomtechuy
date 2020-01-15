<!--
    This is the default file loaded by the server.
    As declared in the .htaccess, every link from our
    domain will be redirected to this file.

    This is like a layout for our site, it contains
    the basic structure of our layout, and loads
    every necessary file. 
 -->

<!-- Routes file.
    The routes.php will call the routes as
    variables. See comments on routes.php.
-->
<?php require_once 'config/routes.php' ?>

<!-- Config File.
    The seoconfig.php is called.
    This file will have the routes of our site,
    their respective metadata, and their views.
-->
<?php require_once 'config/seoconfig.php' ?>


<!-- HTML Structure -->
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include 'includes/head.php' ?>

<body>

    <!-- Preloader -->
    <?php include 'includes/preloader.php' ?>

    <!-- Content-->
    <div id="site">

        <!-- Top bar -->
        <?php include 'includes/topbar.php' ?>

        <!-- Navbar -->
        <?php include 'includes/navbar.php' ?>

        <!-- Page Content -->
        <?php require 'views/' . $PAGE_FILE ?>
        <!-- The $PAGE_FILE variable is set in the seoconfig file, based on requested url -->

        <!-- Footer -->
        <?php include 'includes/footer.php' ?>

    </div>

    <!-- Scripts -->
    <?php include 'includes/scripts.php' ?>

</body>
<html>