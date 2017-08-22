<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 上午10:48
 */
class db {

    private $sql = array("table"=>'',"field"=>'*',"where"=>'',"order"=>'',"limit"=>'');


    //魔术方法 __call 是在调用 一个不存在的方法时被自动调用
    //第一个参数:调用的方法名
    //第二个参数:调用方法时传的参数列表(数组)
//    public function __call($name, $arguments)
//    {
//        echo "你所调用的方法{$name}";
//
//        print_r($arguments);
//        echo "不存在";
//        // TODO: Implement __call() method.
//    }

    public function __call($name, $arguments)
    {
        //判断调用的方法名是否是成员属性的下标

        if (array_key_exists($name, $this->sql)) {
            //如果是就赋值
            $this->sql[$name]=$arguments[0];
        } else {
            die("你所调用的方法不存在");
        }
        //返回本对象 实现连贯操作
        return $this;
        // TODO: Implement __call() method.
    }

    public function select() {
        if ($this->sql['where']) {
            $where = "WHERE {$this->sql['where']}";
        } else {
            echo "000000";
        }

        if ($this->sql['order']) {
            $order = "ORDER {$this->sql['order']}";
        }

        if ($this->sql['limit']){
            $limit = "LIMIT {$this->sql['limit']}";
        }

        $sql = "SELECT {$this->sql['field']} FROM {$this->sql['table']} {$where} {$order} {$limit}";
        echo $sql;
    }
}

$db = new db();
$db->table("user")->field("id,username,pwd")->where("hanzghou")->limit("0.10")->order("order");

$db->select();


//var_dump($db);
