<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 下午5:14
 */
include ("多态应用class.php");
include ("多态应用store.php");
include ("多态应用key.php");
class computer {
    public function useUSB($obj) {
        $obj->run();
    }
}

$computer = new computer();

$computer->useUSB(new mouse());
echo "<hr />";
$computer->useUSB(new store());
echo "<hr />";
$computer->useUSB(new key());
echo "<hr />";
