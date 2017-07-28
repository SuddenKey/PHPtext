<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/7/27
 * Time: 上午11:17
 */

$name = $_POST['name'];

if (empty($name)) {
    die('name is empty');
} else {
    print_r($name);
}

$age = $_POST['age'];
if (empty($age)) {
    die('age is empty');
} else {
    print_r($age);
}

require_once 'function.php';

$conn =  connectDB();
$age = intval($age);
$sql =  "INSERT INTO users(name, age) VALUES ('$name', $age)";

if($conn->query($sql)==true){
    header("Location:allusers.php");
}else{
    echo "Error insert data: " . $conn->error;
}

//$result = mysqli_query($conn, "INSERT INTO users(name, age) VALUE ($name, $age)");
//if ($result) {
//    echo 'result';
//} else {
//    echo 'no';
//}
//print_r($result);
//header("Location:allusers.php");