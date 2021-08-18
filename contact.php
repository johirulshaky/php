<!-- login-logout-start -->
<?php
// session_start();
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/php/php-code/login.php");
}
?>
<!-- login-logout-end -->


<div class="contact">
    <form action="message.php" method="GET">
        <input type="text" name="fullName" placeholder="Your name"><br>
        <input type="email" name="email" placeholder="contact@gmail.com"><br>
        <textarea name="textarea" placeholder="write your message"></textarea><br>
        <input type="submit" name="message" value="Sent message">
    </form>
</div>