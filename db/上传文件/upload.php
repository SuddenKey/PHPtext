<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传文件</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/8
 * Time: 下午3:27
 */
$file = $_FILES['file'];
$fileName = $file['name'];
move_uploaded_file($file['tmp_name'],$fileName);

echo "<img src='$fileName'>";
?>

</body>
</html>

