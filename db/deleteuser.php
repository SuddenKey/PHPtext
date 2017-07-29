<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/7/29
 * Time: 下午3:35
 */
if (empty($_GET['id'])) {
    die("id is empty");
}
require_once "function.php";
$conn = connectDB();
$id = intval($_GET['id']);
$conn->query("DELETE from users WHERE id = $id");

//mysqli_query($conn, "DELETE from users WHERE id = $id");
if(mysqli_errno()) {
    echo mysqli_error();
} else {
    header("Location:allusers.php");
}