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
$conn = connectDB();

if (!empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "select * FROM users where id = $id";

    $result = $conn->query($sql);
    print_r(mysqli_error($conn));
    if (mysqli_errno($conn)) {
        die('can not connect db');
    }
    $arr = mysqli_fetch_assoc($result);
    print_r($arr);
}
?>

<form action="edituser_service.php" method="post">
    <div>
        用户ID
        <input type="text" name="id" value="<?php echo $arr['id'];?>">
    </div>
    <div>
        用户名
        <input type="text" name="name" value="<?php echo $arr['name'];?>">
    </div>
    <div>
        用户年龄
        <input type="text" name="age" value="<?php echo $arr['age'];?>">
    </div>

    <input type="submit" value="提交修改的数据">
</form>

</body>
</html>

