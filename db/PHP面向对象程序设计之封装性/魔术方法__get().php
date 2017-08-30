<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/30
 * Time: 上午9:02
 */
class person {
    private $name;
    private $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //魔术方法__get() 是在类的外部直接得到私有的或受保护的成员属性时被自动调用
    //参数:要访问的成员属性名
    //作用:可以得到私有的或受保护的成员属性。也可以对返回的结果进行控制
    public function __get($name)
    {
        return $this->name;
        // TODO: Implement __get() method.
    }
}

$person = new person("zhangsan", 18);
echo $person->name;
