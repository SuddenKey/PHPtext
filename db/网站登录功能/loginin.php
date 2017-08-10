<?php
session_start();

header("Content-type:text/html;charset=utf-8");
//$host = '', $user = '', $password = '', $database = '', $port = '', $socket = ''
$con = mysqli_connect('localhost','root','','login');
if (!$con) {
    echo mysqli_errno();
}

mysqli_select_db($con,'login');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from users WHERE name = '$username' and password = '$password'";
$set = $con->query($sql);
$arr = mysqli_fetch_array($set);

if ($arr) {
//    print_r($arr);
    $_SESSION['login'] = $username;

    echo "<script>alert('登录成功')</script>";
} else {
    echo "登录失败";
}


?>