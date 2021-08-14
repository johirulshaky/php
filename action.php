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

echo $_SESSION['welcome'];
echo $_SESSION['name'];
echo $_SESSION['bye'];

?>