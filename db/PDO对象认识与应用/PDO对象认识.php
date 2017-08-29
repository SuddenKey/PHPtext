<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/25
 * Time: 下午5:14
 */
//echo phpinfo() 查看开启的方法
//单态类(目的是为了生产唯一的对象)
class A {

    private static $a = null;

    public function __construct()
    {
    }

     static function makeA() {
         if (self::$a == null) {
             self::$a = new self();
         }
        return self::$a;
    }
}
print_r(A::makeA());
