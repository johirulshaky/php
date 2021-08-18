<!-- header start -->
<?php require 'includes/header.php' ; ?>
<!-- header end -->


<?php
echo "<h1 style='color:green; margin-left:10px;'>Successfully Message</h1>";
?>


<?php
$fullName = isset($_GET['fullName']) ? $_GET['fullName'] : " ";
$email = isset($_GET['email']) ? $_GET['email'] : " ";
$textarea = isset($_GET['textarea']) ? $_GET['textarea'] : " ";
?>
<div class="message">
    <table>
        <tr>
            <td>Name : </td>
            <td><?= $fullName ?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Message : </td>
            <td><?= $textarea ?></td>
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

<a class="messageHome" href="http://localhost/php/php-code/index.php?page=contact">contact</a>





<!-- footer start -->
<?php require 'includes/footer.php' ; ?>
<!-- footer end -->
