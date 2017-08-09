<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/9
 * Time: 下午4:29
 */
//php操作数据库
header("Content-type:text/html;charset=utf-8");
//$host = '', $user = '', $password = '', $database = '', $port = '', $socket = ''
$con = mysqli_connect('localhost','root','','login');
if (!$con) {
    echo mysqli_errno();
}

mysqli_select_db($con,'login');

$password = md5("123456");
//增加
//$sql = "insert into users(name,password)VALUES('admin','$password')";
//删除
//$sql = "delete from users WHERE id = 1";
//修改
//$sql = "update users set name = 'hahaaahahah' WHERE  id = 2";
//查询
$sql = "select * from users";

$set = $con->query($sql);
//$arr = mysqli_fetch_assoc($set);

if ($set == 1) {
    echo "成功";
} else {
    echo "失败";
}
