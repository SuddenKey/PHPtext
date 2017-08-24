<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/24
 * Time: 下午3:59
 */
$conn =   mysqli_connect('localhost', 'root', '', 'codestay');
mysqli_select_db($conn, 'codestay');

if ($conn) {
    echo 'connect bd';
} else {
    die('can not connect db');
}

//将验证码信息增加到数据库
$phonenum = "18937680881";
$code = "123456";

$sql = "insert into code(phonenum, yannum) VALUES ('$phonenum', '$code')";
$setquery = $conn->query($sql);
if ($setquery){
    echo "添加成功";
}
