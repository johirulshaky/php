<?php
    if (isset($_POST['submitImg'])) {
        $imgName = $_FILES['uploadImg']['name'];
        $tmpImgName = $_FILES['uploadImg']['tmp_name'];
        move_uploaded_file($tmpImgName, "upload/$imgName");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload image</title>
</head>
<body>
    <img src="upload/<?php if(isset($imgName)){ echo $imgName; } ?>" alt="<?= $imgName ?>">
</body>
</html>