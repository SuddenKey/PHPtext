<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 上午9:21
 */
class demo {
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function say(){
        echo "say".$this->name;
    }

    //__clone 魔术方法  是在克隆对象时被自动调用的
    //作用:可以对新对象的成员属性进行赋值
    public function __clone()
    {
        $this->name = "lisi";
        $this->age = 20;
    }
}

$demo = new demo("zhangsan", 19);
$demo->say();

$demo1 = clone $demo;
echo "<br />";
$demo1->say();
var_dump($demo1);
