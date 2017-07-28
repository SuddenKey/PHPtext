<?php
require_once 'function.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>所有用户</title>
</head>
<body>


<a href="adduser.html">添加用户</a>
<table style='text-align: left;border: solid' border='1'>
    <tr><th>id</th><th>名字</th><th>年级</th></tr>


<?php
$conn = connectDB();
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}



$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);
$dataCount = mysqli_num_rows($result);



for($i = 0;$i<$dataCount;$i++) {
    $result_arr = mysqli_fetch_assoc($result);
    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];
    echo "<tr><th>$id</th><th>$name</th><th>$age</th></tr>";
}

define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
echo BASE_PATH;


?>


</table>

</body>
</html>