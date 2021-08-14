<!-- header start -->
<?php require 'includes/header.php' ; ?>
<!-- header end -->

<!-- login logout session start -->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<!-- login logout session end -->

<div style="padding-bottom:100px;">

<!-- GET form submit system -->
<?php
echo "<h1 style='color:green'>Submited successfully</h1>";
?>

<?php
$user = isset($_GET['user']) ? $_GET['user'] : "getuser";
$email = isset($_GET['email']) ? $_GET['email'] : "getuser@gmail.com";
$password = isset($_GET['password']) ? $_GET['password'] : "get1234";
?>
<table style="padding: 50px 0;">
    <tr>
        <td>User Name: </td>
        <td><?= $user ?></td>
    </tr>
    <tr>
        <td>Email address: </td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Password: </td>
        <td><?= $password ?></td>
    </tr>
</table>

<a style='text-decoration:none; box-shadow: 0px 8px 10px 0px grey; padding: 5px; font-size:20px; background:dodgerblue; color:white;' href="index.php">Home</a>

</div>

<!-- footer start -->
<?php require 'includes/footer.php' ; ?>
<!-- footer end -->