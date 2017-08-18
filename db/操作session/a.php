<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/17
 * Time: 下午4:20
 */
session_start();
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'No name found';
}


