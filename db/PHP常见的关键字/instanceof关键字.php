<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 上午11:08
 */
class demo {

}

class demo1 extends demo {

}
$demo = new  demo();
$demo1 = new demo1();

//instanceof 可以用于判断一个对象是否由一个类或这个类子类实例化来的
var_dump($demo instanceof demo);
var_dump($demo1 instanceof demo1);
var_dump($demo instanceof demo1);
var_dump($demo1 instanceof demo);
