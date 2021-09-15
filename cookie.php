<pre>
<?php
    setcookie('address', 'netrakona', time()+6);
    setcookie('email', 'contact@gmail.com', time()+60*60*24*365);
    setcookie('website', 'https://johirulshaky.com');
    print_r($_COOKIE);
?>
</pre>