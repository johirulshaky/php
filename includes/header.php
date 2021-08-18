


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php code</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>

<!-- login-logout-start -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->

    <?php echo '<h1 class="header"><a href="index.php">Header</a></h1>' ?>


    <a class="logout" href="logout.php">Logout</a>










