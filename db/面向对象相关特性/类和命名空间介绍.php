<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/22
 * Time: 下午5:24
 */
//require_once 'hello.php';
//$h = new hello();
//$h->sayHelo();

//require_once 'jikexueyuan/hello.php';
//require_once 'jkxy/hello1.php';
//
//$h = new \jikexueyuan\hello();
//$h->sayHello();
//
//$h = new \jkxy\hello1();
//$h->sayHello();

//require_once 'man.php';
//$man = new man(18, "wanhao");
//echo $man->getName();
//man::sayHello();
//for ($i=0;$i<man::MAX_MAN_NUM;$i++) {
//    new man(10, "jikexueyuan");
//    echo $i;
//}

require_once 'people.php';
$m = new people(19, "haha");
$m ->hi();


?>


</body>
</html>



