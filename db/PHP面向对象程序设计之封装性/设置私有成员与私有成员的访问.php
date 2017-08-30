<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/29
 * Time: 下午4:45
 */
class person {
    public $name = "zhangsan";
    private $age = 18;
    protected $sex = "男";
    var $height;//没有考虑清楚用什么封装,先使用var修饰

    private function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    private function getSex() {
        return $this->sex;
    }

    public function say () {
        return $this->getAge().$this->getSex().$this->getName();
    }

}

$person = new person();
//echo $person->name;
//echo "<hr />";
//echo $person->age;
//echo "<hr />";
//echo $person->sex;
//echo "<hr />";
//echo $person->getName();
echo $person->getAge();
