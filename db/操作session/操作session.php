<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/17
 * Time: 下午4:16
 */
session_start();
$_SESSION['name'] = 'haohao';

session_destroy();

header('Location:a.php');