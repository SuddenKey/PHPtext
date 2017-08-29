<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/26
 * Time: 下午3:46
 */
class demo {
    public $a = "a";
    protected $b = "b";
    private $c = "c";
}

$demo = new  demo();

//get_class()
//参数对象
var_dump(get_class($demo));

//get_object_vars()
//返回一个由成员属性关联数组  数组的下标为成员属性名数组的值为成员属性值
//参数:对象
var_dump(get_object_vars($demo));