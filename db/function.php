<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/7/20
 * Time: 下午4:03
 */

require_once 'config.php';

function connectDB() {
    $conn =   mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB);
    mysqli_select_db($conn, 'myApp');

    if ($conn) {
//        echo 'connect bd';
    } else {
        die('can not connect db');
    }
    return $conn;
}
