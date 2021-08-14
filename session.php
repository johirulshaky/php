<!-- login logout session start -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!-- login logout session end -->

<?php
session_start();

$_SESSION['welcome'] = "Welcome to PHP <br>";
$_SESSION['name'] = "Johirul <br>";
$_SESSION['bye'] = "Bye PHP";

print_r($_SESSION);
?>