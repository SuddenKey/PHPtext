<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/11
 * Time: 下午4:21
 */
require_once 'mysql_connect.php';
$randnumber = $_GET['recondnumber'];
$conn = connectDB();

$result = $conn->query("select *from login_recond WHERE rannumber='$randnumber'");
$row = mysqli_fetch_array($result);
if ($row['name'] != "") {
    echo "true";
} else {
    echo "false";
}