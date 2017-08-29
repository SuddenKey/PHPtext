<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/26
 * Time: 上午11:20
 */
//$mysqli = new mysqli("localhost","root","","users");
//$dsn = "mysql:host=localhost; port=3306; dbname=wsq_hotel; charset=utf-8";
//$user = 'root';
//$psw ='root';
//$pdo = new PDO($dsn,$user,$psw);

try {
    $pdo = new PDO("mysqli:host=localohost;dbname=users", "root", "");

}catch (PDOException $e) {
    die("数据库连接失败".$e->getMessage());
}
print_r($pdo);