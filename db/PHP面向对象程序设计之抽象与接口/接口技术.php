<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 下午4:27
 */
//接口 声明关键字 interface
//接口中可以声明常量也可以声明抽象方法
//接口中的方法都是抽象方法不需要abstract修饰
//接口不能实例化,需要用一个类去实现它(implements)
//一个类可以实现多个接口(解决了PHP单继承的问题)
interface people {
    const NAME = "lisi";

    public function say();
    public function run();
    public function eat();
}

interface learn {
    public function study();
}

class student implements people,learn{
    public function say()
    {
        echo "say...";
        // TODO: Implement say() method.
    }
    public function eat()
    {
        echo "eat...";
        // TODO: Implement eat() method.
    }
    public function run()
    {
        echo "run...";
        // TODO: Implement run() method.
    }
    public function study(){
        echo "study...";
    }
}

$student = new student();
echo $student->say();
echo "<hr />";
echo student::NAME;
echo "<hr />";



