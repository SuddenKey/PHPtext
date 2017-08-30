<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/30
 * Time: 上午11:09
 */
class person {
    private $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //魔术方法__unset() 是在类的外部用函数unset()释放私有的或受保护的成员属性时被自动调用
    //参数:要释放的成员属性名
    //作用:可以按需求控制成员属性的释放操作

    public function __unset($name)
    {
        if ($name = "name") {
            return;
        }
        unset($this->name);
        // TODO: Implement __unset() method.
    }
}

$person = new person("zhangsan", 18);
unset($person->name);
var_dump($person);