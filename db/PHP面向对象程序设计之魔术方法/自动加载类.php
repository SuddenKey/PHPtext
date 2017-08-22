<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 下午1:52
 */
//__autoload 是在实例化对象时,如果累不存在就会被自动调用
//参数:实例化的类名
//作用:可以用于自动引入类文件
function __autoload($classname) {
    //注意:类文件名要有规律
    //     类文件名要统一
    //     类文件的路径要有规律
    $file = $classname.".php";
    $path = "./class/".$file;
    if (file_exists($path)) {
        include ($path);
    } else {
        die("你所使用的{$classname}.php文件不存在");
    }
}
$demo = new demo();

var_dump($demo);

$demo = new demo1();


