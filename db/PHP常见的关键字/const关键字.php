<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 上午10:48
 */
class demo {
    //常量定义时就要赋初始值
    //常量一但定义就不能整改
    //如果是多个单词组成的常量名要用下划线分隔
    const HOST = '127.0.0.1';
    const DB_NAME = 'hehe';

    public function getConst() {
        //在类的内部访问常量 self::常量名
        return self::DB_NAME;
    }
}

//在类的外部访问常量  类名::常量名
echo demo::HOST;
echo "<hr />";
$demo = new demo();
echo $demo->getConst();