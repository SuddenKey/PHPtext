<?php
/**
 * 获得JSON数据
 */
require_once "mysql_connet.php";
$conn = connectDB();

$n = 0;

$result = mysqli_query($conn, "select *from news");
while ($row = mysqli_fetch_array($result)) {
    $arr[$n++] =array("tilte"=>$row['title'],"descri"=>$row['descri'],"time"=>$row['time'],"content_url"=>$row['content_url'],"pic_url"=>$row['pic_url']);
}


//数组转换为JSON字符串
echo json_encode($arr);