<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/7/29
 * Time: 下午2:52
 */

require_once 'function.php';
if (empty($_POST['id'])) {
    die('id is empty');
}

if (empty($_POST['name'])) {
    die('name is empty');
}

if (empty($_POST['age'])) {
    die('age is empty');
}

$id = intval($_POST['id']);
$name = $_POST['name'];
$age = intval($_POST['age']);

$conn = connectDB();
mysqli_query($conn, "UPDATE users set name = '$name', age = $age WHERE id = $id");

if(mysqli_errno()) {
    echo mysqli_error();
} else {
    header("Location:allusers.php");
}