<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 上午10:38
 */
class demo {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    //魔术方法 __toString() 是直接echo 或print 对象时被自动调用
    //作用:可以直接返回字符串或用于调用流程处理
    public function __toString()
    {
        $this->d();
        $this->e();
        return $this->name;
        // TODO: Implement __toString() method.
    }

    private function d() {
        echo "d......";
    }

    private function e() {
        echo "e.......";
    }
}

$demo = new demo("zhangsan");
echo $demo;
