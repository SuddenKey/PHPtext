<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/8
 * Time: 下午2:22
 */
//添加水印
$img = imagecreatefromjpeg('timg.jpg');
imagestring($img, 100, 5, 5, 'www.baidu.com', imagecolorallocate($img,0,255,0));

header('Content-type:image/png');
imagepng($img);