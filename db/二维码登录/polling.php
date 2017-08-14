<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/11
 * Time: 下午4:21
 */
require_once 'mysql_connect.php';
print_r($_GET);
$randnumber = $_GET['recondnumber'];
$conn = connectDB();

$result = $conn->query("select * from login_recond WHERE recondnumber='$randnumber'");
$row = mysqli_fetch_array($result);
print_r($result);

if ($row['name'] != "") {
    echo "true";
} else {
    echo "failure";
}