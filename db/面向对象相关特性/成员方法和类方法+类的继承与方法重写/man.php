<?php

/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/23
 * Time: 上午11:21
 */
class man
{
    /**
     * man constructor.
     * @param $age 这个人的年龄
     * @param $name  这个人的名字
     * @param $sex 人的性别
     */
    public function __construct($age, $name, $sex)
    {
        $this->_age = $age;
        $this->_name = $name;
        $this->_sex = $sex;
        man::$num++;
        if (man::$num>man::MAX_MAN_NUM){
            throw new Exception("不能创建更多的人");
        }
    }


    public function getAge(){
        return $this->_age;
    }

    public function getName(){
        return $this->_name;
    }

    public function getSex() {
        return $this->_sex;
    }

    public function hi() {
        echo $this->_name.'say hi';
    }

    public $_age, $_name, $_sex;
    private static $num = 0;
    const MAX_MAN_NUM = 200;
    //类方法
    public static function sayHello(){
        echo "hello";
    }
}