<?php
header("Content-type:text/html;charset=utf-8");
//$host = '', $user = '', $password = '', $database = '', $port = '', $socket = ''
$con = mysqli_connect('localhost','root','','login');
if (!$con) {
    echo mysqli_errno();
}

mysqli_select_db($con,'login');

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "select * from users WHERE name = '$username' and password = '$password'";
$set = $con->query($sql);

if ($set == 1) {
    $arr = mysqli_fetch_array($set);
    print_r($arr);
    echo "成功";
} else {
    echo "失败";
}


?>