
<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/29
 * Time: 上午10:17
 */
var_dump($_FILES['img']);

$filename = time().$_FILES['img']['name'];


$filename =iconv("UTF-8","gb2312",$filename);
//检查文件或目录是否存在
if(file_exists($filename))
{
    echo"该文件已存在";
}
else
{
    //保存文件,   move_uploaded_file 将上传的文件移动到新位置
    move_uploaded_file($_FILES['img']['tmp_name'],$filename);//将临时地址移动到指定地址
}
