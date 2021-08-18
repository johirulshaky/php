
<!-- login-logout-start -->
<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->

<!-- 
    Author   : Johirul Islam
    Github   : https://github.com/johirulshaky
    Facebook : https://facebook.com/johirulshaky
    Linkedin : https://linkedin.com/in/johirulshaky
    Instagram: https://www.instagram.com/johirulshaky/
 -->


        <?php
        // session_start();
        echo $_SESSION['welcome'];
        echo $_SESSION['name'];
        echo $_SESSION['bye'];
        ?>
