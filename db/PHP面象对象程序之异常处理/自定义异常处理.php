<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/18
 * Time: 下午2:45
 */
//自定义异常处理类时要继承系统的异常处理类
class 自定义异常处理 extends Exception
{
    //可以自己定义异常处理流程
    public function getAllinfo()
    {
        return "异常发生的文件{$this->getFile()},异常发生的行为{$this->getLine()},异常发生的信息{$this->getMessage()},异常发生的文件{$this->getCode()}";

    }
}

try {
    if ($_GET['num'] == 5) {
        throw new 自定义异常处理("这是一个自定义的异常",123456);
    }
    echo "success";
    //捕捉时注意类型约束为自己定义的异常处理类名
}catch (自定义异常处理 $e) {
    echo $e->getAllinfo();
}