<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/15
 * Time: 下午3:08
 */
//final 关键字修饰的类 是最终的类不能被继承
//class demo {
//    //final 关键字修饰的成员方法 是最终版本的方法不能被冲重写
//    public function say(){
//        echo "demo say";
//    }
//}
//
//class demo1 extends demo {
//    public function say() {
//        echo "demo1 say";
//    }
//}
//$dl = new demo();
//$dl->say();

class staticDemo {
    //static 如果修饰成员属性。这个成员属性就是静态的成员属性
    static public $name = "zhangsan";
    static public $num = 0;  //静态的成员属性只能初始化一次。所有实例化的对象访问的都是同一个静态成员属性
    public function  __construct()
    {
        self::$num++;
    }

    //static 如果修饰成员方法。这个成员属性就是静态的成员方法
    static public function say() {
        //self 代表本类
        return self::$name;   //在类的内部访问静态成员属性  self::成员属性名
    }
}

echo staticDemo::$name; //在类的外部访问静态的成员属性。类名::成员属性名
echo staticDemo::say(); //在类的外部访问静态的成员方法  类名::成员方法名
$d1 = new staticDemo();
echo "<br />";
echo staticDemo::$num;
$d2 = new staticDemo();
echo "<br />";
echo staticDemo::$num;
