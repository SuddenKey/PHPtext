<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/30
 * Time: 上午8:52
 */

class person {
    private $name;
    protected $age;
    public function set($name, $value) {
        $this->$name = $value;
    }
    //魔术方法__set()是在私有的成员属性在类的外部直接赋值时被自动调用
    //第一个参数:要赋值的成员属性名
    //第二个参数:要赋的值
    //作用:可以更好的对程序进行控制
    public function __set($name, $value)
    {
        if ($name = 'age' && $value > 30) {
            $this->$name = $value - 5;
        } else {
            $this->$name = $value;
        }
        // TODO: Implement __set() method.
    }
}

$person = new person();

//$person->set("name", "zhangsan");
//$person->set("age", "18");

$person ->name = "lisi";
$person->age = 18;
var_dump($person);