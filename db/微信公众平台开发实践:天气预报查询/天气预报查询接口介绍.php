<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/30
 * Time: 下午1:56
 */

$ch = curl_init();
$url = 'http://apis.baidu.com/thinkpage/weather_api_full/lifeindex?location=beijing&language=zh-Hans';
$header = array(
    'apikey: edcad049916b5e7781877d8d150bcf2d',
);
// 添加apikey到header
curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行HTTP请求
curl_setopt($ch , CURLOPT_URL , $url);
$res = curl_exec($ch);

var_dump(json_decode($res));