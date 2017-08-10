<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/7
 * Time: 下午5:07
 */
//生成图片
$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);
//图片水印
imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));

header('Content-type:image/png');
imagepng($img);