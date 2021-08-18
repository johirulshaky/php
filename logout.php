<?php
session_start();

session_destroy();

header("Location: http://localhost/php/php-code/login.php");
?>