<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/26
 * Time: 下午4:47
 */
class parentClass {

}

class demo extends parentClass {

}
//get_parent_class() 得到类或对象的父类名
//var_dump(get_parent_class("demo"));
$demo = new demo();
var_dump(get_parent_class($demo));




class person {

}

class student extends person {

}
$person = new person();
$student = new student();
//is_a判断对象是够由  某个类 或 该类的父类创建
var_dump(is_a($person, "person"));
var_dump(is_a($student, "person"));
var_dump(is_a($person, $student));