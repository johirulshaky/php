<!-- header start -->
<?php require 'includes/header.php' ; ?>
<!-- header end -->



<!-- REQUEST form submit system -->
<?php
echo "<h1 style='color:green; margin-left:10px;'>Submited successfully</h1>";
?>

<?php
$user = isset($_REQUEST['user']) ? $_REQUEST['user'] : "requestuser";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "requestuser@gmail.com";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "request1234";
?>
<div class="message">
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
</div>
<!-- 
    Author   : Johirul Islam
    Github   : https://github.com/johirulshaky
    Facebook : https://facebook.com/johirulshaky
    Linkedin : https://linkedin.com/in/johirulshaky
    Instagram: https://www.instagram.com/johirulshaky/
 -->

<a class="messageHome" href="http://localhost/php/php-code/index.php?page=home#requestButton">REQUEST</a>



<!-- footer start -->
<?php require 'includes/footer.php' ; ?>
<!-- footer end -->