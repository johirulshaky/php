<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background: #a5a5a5;
        }
        .loginForm{
            width: 300px;
            background: #ddd;
            margin: 50px auto 100px;
            padding: 50px;
            box-shadow: 0px 15px 20px 0px #000000c4;
        }
        input{
            display: block;
            width: 100%;
            box-sizing: border-box;
            margin: 10px;
            padding: 5px;
            border: none;
        }
        input[type="submit"]{
            color: white;
            background: dodgerblue;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- header start -->
    <?php require 'includes/header.php' ; ?>
    <!-- header end -->

    <!-- login system start -->
    <?php
        session_start();

        if (isset($_SESSION['user'])) {
            header("Location: index.php");
        }

        if (isset($_POST['login'])) {
            define('USER' , 'johirulshaky');
            define('PASSWORD' , '1234');
            
            $user = $_POST['user'];
            $password = $_POST['password'];

            if ($user == USER) {
                if ($password == PASSWORD) {
                    $_SESSION['user'] = $user;
                    header("Location: index.php");
                }else {
                    echo "<h2 style='color:red; width:300px; margin: 100px auto -90px; text-align:center'>Password not match</h2>";
                }
            }else {
                echo "<h2 style='color:red; width:300px; margin: 100px auto -90px; text-align:center'>Email not match</h2>" ;
            }
        }
    ?>
    <div class="loginForm">
        <form action="" method="POST">
            <input type="text" name="user" placeholder="johirulshaky" title="type user: johirulshaky" required>
            <input type="password" name="password" placeholder="1234" title="type password: 1234" required>
            <input style= "" type="submit" name="login" value="Login">
        </form>
    </div>
    <!-- login system end -->

    <!-- footer start -->
    <?php require 'includes/footer.php' ; ?>
    <!-- footer end -->

</body>
</html>