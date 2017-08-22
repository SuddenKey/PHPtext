<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 下午4:00
 */
include "对象串行化.php";

$str = file_get_contents("./data.txt");
$d = unserialize($str);  //可以把串行化的结果进行反串行化操作

var_dump($d->age);