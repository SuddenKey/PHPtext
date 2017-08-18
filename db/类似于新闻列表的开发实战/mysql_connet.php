<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/18
 * Time: 下午5:02
 */
function connectDB () {
    $conn = mysqli_connect("localhost","root","","newsdemo");
    mysqli_query($conn, "set names 'utf8'");
    mysqli_query($conn, "set character set utf8");
    mysqli_query($conn, "set character_set_result=utf8");
    if (!$conn){
        die(mysqli_error($conn));
    }
    mysqli_select_db($conn, "newsdemo");
    return $conn;
}


