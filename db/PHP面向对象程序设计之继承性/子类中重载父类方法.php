<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/21
 * Time: 下午3:58
 */
class person {
    public $name;
    public $age;
    public $sex;

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function say () {
        echo "我的名字是:{$this->name}, 我的年龄是:{$this->age},我的性别是:{$this->sex}";
    }
}

class teacher extends person {
    public $teach;

    public function __construct($name, $age, $sex, $teach)
    {
        parent::__construct($name, $age, $sex);
//        $this->name = $name;
//        $this->age = $age;
//        $this->sex = $sex;
        $this->teach = $teach;
    }

    public function say() {
        parent::say();
        echo "我教的学科是:{$this->teach},";
    }
}

class student extends person {
    public $school;

    public function __construct($name, $age, $sex, $school)
    {
        parent::__construct($name, $age, $sex);
        $this->school = $school;
    }

    //重写:就是声明 一个与父类中同名的方法
    public function say() {
        //重载: parent::父类中的方法名
        parent::say();
        echo "我的学校是:{$this->school},";
    }
}

$person = new person("zhangsan", 20, "男");
$person->say();
echo "<br />";

//$teacher = new teacher("lisi", 20, "男", "数学");
//$teacher->say();
//echo "<br />";
//
//$student = new student("wangwu", 20, "男", "hahah");
//$student->say();
