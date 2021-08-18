<!-- login-logout-start -->
<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->


<h1 class='notFound'>Not found this page</h1>


