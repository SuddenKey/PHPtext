<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/16
 * Time: 下午5:08
 */
include_once ("多态应用.php");

class store implements USB {
    public function run()
    {
        $this->initialize();
        // TODO: Implement run() method.
    }

    private function initialize(){
        echo "store running...";
    }
}