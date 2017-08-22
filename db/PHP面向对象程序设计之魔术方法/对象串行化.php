<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 下午3:23
 */
//数组串行化
//$arr = array("name"=>'zhangsan',"age"=>18,"sex"=>'男');
//$ste = serialize($arr);
//var_dump($ste);
//
//$arr1 = unserialize($ste);
//var_dump($arr1);
//对象串行化
class demo{
    public $name;
    public $age;
    public $sex;
    public function __construct($name, $age, $sex)
    {
        $this->age = $age;
        $this->name = $name;
        $this->sex = $sex;
    }
    //魔术方法 __sleep() 是在串行化对象时被自动调用
    public function __sleep()
    {
        //返回一个数组,数组的值就是要串行化的成员属性名
        return array("name", "sex", "age");
        // TODO: Implement __sleep() method.
    }
    //魔术方法 __wakeup() 是在反串行化对象时被自动调用

    public function __wakeup()
    {
        //可以把发生改变的成员尚需经进行重新的赋值操作
        $this->age = $this->age+1;
        // TODO: Implement __wakeup() method.
    }
}

//$demo = new demo("zhangsan", 18, "男");
//$str = serialize($demo);                //串行化  可以串行化数组也可以串行化对象,串行化对象知识串行化成员元=属性
//
//$handel = fopen("./data.txt","w+");
//fwrite($handel, $str);
//fclose($handel);
//
//var_dump($str);