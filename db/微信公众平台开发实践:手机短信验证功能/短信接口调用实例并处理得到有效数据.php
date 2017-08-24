<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/24
 * Time: 下午2:34
 */

header("Content-type:text/html;charset=utf-8");

$phonenum = "18937680881";
$code = rand(100000,999999);
$content = "【极客学院测试接口】".$code;

$ch = curl_init();
$url = 'http://apis.baidu.com/kingtto_media/106sms/106sms?mobile='.$phonenum.'&content='.$content.'';
$header = array(
    'apikey: edcad049916b5e7781877d8d150bcf2d',
);
// 添加apikey到header
curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行HTTP请求
curl_setopt($ch , CURLOPT_URL , $url);
$res = curl_exec($ch);

print_r($url);
echo "<br ?>";

print_r($res);


var_dump($res);
if (strpos("$#".$res,"ok")) {
    echo "发送成功";
}