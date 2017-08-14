<?php
/**
 * 接受参数 recondnumber username
 * 无返回值
 */
print_r($_GET);
$recondnumber = $_GET['recondnumber'];
$username = $_GET['name'];
require_once 'mysql_connect.php';
$conn = connectDB();
$conn->query("update login_recond set name = '$username' WHERE recondnumber = '$recondnumber'");