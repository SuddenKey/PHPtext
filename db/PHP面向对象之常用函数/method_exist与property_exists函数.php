<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/26
 * Time: 下午5:28
 */
class people {
    public $name;
    public function say () {

    }
}

$people = new people();

var_dump(method_exists($people, "say"));//检查类的方法是否存在
var_dump(property_exists($people, "name"));//检查对象或类是否具有该属性