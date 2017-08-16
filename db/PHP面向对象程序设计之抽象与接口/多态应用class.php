<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 下午5:07
 */
include ("多态应用.php");

class mouse implements USB {
    public function run()
    {
        $this->init();
        // TODO: Implement run() method.
    }
    public function init(){
        echo "mouse class";
    }
}