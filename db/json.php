
<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/4
 * Time: 下午5:10
 */
//Json format
//[1,2,5,"Hello",[6,7,8]]
//{"h":"hello world", "w":"World", [1,2,3]}

//encode >>>>>>>>>>>>>>>>>>
//$arr = array(1,2,5,8,"hell","hello world",array('h'=>'Hello world'));

//print_r($arr);
//echo json_encode($arr);

//$obj = array('h'=>'hello', 'w'=>'World', array(3,2,1));
//echo json_encode($obj);

//decode
$jsonstr = '{"h":"hello","w":"World","0":[3,2,1]}';
$obj = json_decode($jsonstr);
//print_r($obj);
echo $obj->h;

