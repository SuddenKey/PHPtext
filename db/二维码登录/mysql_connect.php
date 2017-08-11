<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/10
 * Time: 下午5:28
 */

function connectDB() {
    $conn =  mysqli_connect('localhost','root','','qrlogin');
    mysqli_select_db($conn, 'login_recond');

    if ($conn) {
//        echo 'connect bd';
    } else {
        die('can not connect db');
    }
    return $conn;
}