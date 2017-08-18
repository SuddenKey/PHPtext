<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/18
 * Time: 下午2:25
 */
//try分支  在这里
try{
    $num = 2;
    if ($num == 1) {
        echo "success";
    } else {
        throw new exception("变量num不等于1", 1234);
    }
} catch (exception $e) {
    echo "错误文件为:";
    echo $e->getFile();
    echo "错误的行为:";
    echo $e->getLine();
    echo "错误的代码:";
    echo $e->getCode();
    echo "得到的异常信息";
    echo $e->getMessage();
    //echo $e;
}