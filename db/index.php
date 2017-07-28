<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>连接数据库</title>
</head>
<body>



<?php
// 创建连接
$conn = new mysqli('localhost', 'root' , '', 'myApp');
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

//$sql = "SELECT id, name, age FROM users WHERE id = 1";
////$sql = "SELECT * FROM myApp";
//
//$result = $conn->query($sql);
//
//echo  '数据条数:'.mysqli_num_rows($result)."<br>";
//
//
//
//
//if ($result->num_rows > 0) {
//    // 输出数据
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
//    }
//} else {
//    echo "0 结果";
//}
//
//
//echo '00000'.'<br>';
//$data_count = mysqli_num_rows($result);
//
//for ($i = 0; $i < $data_count; $i++) {
//    echo 'i = '.$i.'<br>';
//
//    print_r(mysqli_fetch_assoc($result));
//}


$result = mysqli_query($conn, "SELECT COUNT(*) FROM users WHERE id = 2");
$result_arr = mysqli_fetch_array($result);
echo '数据条数'.$result_arr[0];



$conn->close();
///**
// * Created by PhpStorm.
// * User: haohao
// * Date: 2017/7/19
// * Time: 下午2:49
// */
//$conn =  mysqli_connect('localhost', 'root' , '');
//
//if($conn) {
//    mysqli_select_db($conn ,'myApp');
//
//    $result = mysqli_query($conn, "SELECT * FOEM users");
//
//    $result_arr = mysqli_fetch_assoc($result);
//
//    print_r($result_arr);
//
//
//} else {
//    echo '连接失败';
//}
//
//
//
//
//
//
//?>

</body>
</html>