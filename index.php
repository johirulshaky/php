<div id="top"></div>

<!-- header start -->
<?php require 'includes/header.php' ; ?>
<!-- header end -->

<!-- menu start -->
<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'] . ".php";
    }else {
        $page = "home.php";
    }
?>

<nav>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=services">Services</a></li>
        <li><a href="index.php?page=portfolio">portfolio</a></li>
        <li><a href="index.php?page=contact">contact</a></li>
    </ul>
</nav>

<?php
    if (file_exists($page)) {
        require_once $page;
    }else {
        require_once "404.php";
    }
?>
<!-- menu end -->


<a class="top" href="#top">Top</a>
<a class="bottom" href="#bottom">Bottom</a>


<div id="bottom"></div>



<!-- footer start -->
<?php require 'includes/footer.php' ; ?> <!-- ekadikbar require korle ekadikbar echo kore & file access vul hole nicher code run hoy na  -->
<!-- or -->
<?php //require_once 'includes/header.php' ; ?> <!-- ekadikbar require_once korle ekadikbar echo kore na & file access vul hole nicher code run hoy na  -->
<!-- or -->
<?php //include 'includes/header.php' ; ?> <!-- ekadikbar include korle ekadikbar echo kore & file access vul hole nicher code run hoy  -->
<!-- or -->
<?php //include_once 'includes/header.php' ; ?> <!-- ekadikbar include_once korle ekadikbar echo kore na & file access vul hole nicher code run hoy  -->
<!-- footer end -->