<?php
if ($_POST) {
    $conn =   mysqli_connect('localhost', 'root', '', 'codestay');
    mysqli_select_db($conn, 'codestay');
    $phonenum = $_POST['phonenum'];
    if ($conn) {
        echo 'connect bd';
    } else {
        die('can not connect db');
    }

    if ($_POST['send']) {
//将验证码信息增加到数据库
        $code = rand(100000, 999999);
        echo $code;
        $sql = "insert into code(phonenum, yannum) VALUES ('$phonenum', '$code')";
        $setquery = $conn->query($sql);
        if ($setquery){
            echo "添加成功";
        }
    }

    if ($_POST['sure']) {
        $code = $_POST['yannum'];

        $sql = "select *from code WHERE phonenum = '$phonenum'";
        $result = $conn->query($sql);
        $arr = mysqli_fetch_array($result);
        print_r($arr);
        if ($arr['yannum'] == $code) {
            echo "验证成功";
            header("Location:http://www.baidu.com");
        } else {
            echo "失败";
        }
    }
}



?>

<html>
<head>
    <title>短信发送实例</title>
</head>

<body>
<form action="通过查询数据库,实现手机短信验证功能.php" method="post">
    手机号<input type="text" name="phonenum">
    验证码<input type="text" name="yannum">
    <input type="submit"  name="send" value="发送验证码"><br>
    <input type="submit" name="sure" value="确定">
</form>

</body>
</html>
