<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件操作</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/7
 * Time: 下午1:23
 */

// write data  写入文件操作
//$f = fopen('datafile', 'w');
//if ($f) {
//    //fopen(filename,mode,include_path,context) 函数打开文件或者 URL
////filename:必需。规定要打开的文件或 URL
////mode:必需。规定要求到该文件/流的访问类型。可能的值见下表
////include_path:可选。如果也需要在 include_path 中检索文件的话，可以将该参数设为 1 或 TRUE
////context:可选。规定文件句柄的环境。Context 是可以修改流的行为的一套选项。
//    fwrite($f, 'hellophp');
////fwrite(file,string,length) 函数写入文件（可安全用于二进制文件）。
////file:必需。规定要写入的打开文件;
////string:必需。规定要写入文件的字符串。
////length:可选。规定要写入的最大字节数。
//    fclose($f);
//    echo 'OK';
//} else {
//    echo '创建文件失败';
//}

//read data 读取文件操作
//$f = fopen('datafile', 'r');
//
//while (!feof($f)) {
//    $content = fgets($f);
//    echo $content;
//}
//
//fclose($f);

echo file_get_contents('datafile');


?>

</body>
</html>


