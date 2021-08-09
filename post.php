<!-- header start -->
<?php require 'includes/header.php' ; ?>
<!-- header end -->


<!-- POST form submit system -->
<?php
echo "<h1 style='color:green'>Submited successfully</h1>";
?>

<?php
$user = isset($_POST['user']) ? $_POST['user'] : "postuser";
$email = isset($_POST['email']) ? $_POST['email'] : "postuser@gmail.com";
$password = isset($_POST['password']) ? $_POST['password'] : "post1234";
?>

<table>
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
<br><br>



<a style='text-decoration:none; box-shadow: 0px 8px 10px 0px grey; padding: 5px; font-size:20px; background:dodgerblue; color:white; margin-left:100px;' href="index.php">Home</a>






























<!-- footer start -->
<?php require 'includes/footer.php' ; ?>
<!-- footer end -->