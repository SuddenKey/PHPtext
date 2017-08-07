<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/7
 * Time: 下午5:07
 */

$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);
header('Content-type:image/png');
imagepng($img);