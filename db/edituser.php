<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑用户</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/7/28
 * Time: 下午4:23
 */

require_once 'function.php';
if (!empty($_GET['id'])) {
    $conn = connectDB();
    $id = intval($_GET['id']);
    $sql = "select * form users where id = $id";

    $result = $conn->query($sql);
    if (mysqli_errno($conn)) {
        die('can not connect db');
    }
    $arr = mysqli_fetch_assoc($result);
    print_r($arr);
}
?>

</body>
</html>

