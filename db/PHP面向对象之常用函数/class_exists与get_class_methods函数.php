<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/26
 * Time: 下午3:01
 */
//class person {
//
//}
//
//function __autoload($classname) {
//    $file = "/Users/haohao/PhpstormProjects/PHPtext/db/PHP面向对象之常用函数/{$classname}.php";
//    if (file_exists($file)) {
//        include ($file);
//    } else {
//        die("你使用的类{$classname}.php不存在");
//    }
//}
////class_exists()函数  判断类是否存在
////第一个参数:要判断类的名
////第二个参数:(可选)如果设置为true 则会自动去调用__autoload()方法进行类的自动加载
//var_dump(class_exists("student"));

class person {
    public function say() {

    }

    protected function run() {

    }

    private function eat() {

    }
}

$p = new person();
//get_class_methods()得到类或对象中的成员方法组成的数据
//如果是私有的或受保护的的成员方法就不会被得到
//参数可以传类名也可以传对象
var_dump(get_class_methods($p));