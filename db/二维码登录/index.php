<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QRlogin</title>
</head>
<body>

<?php
    require_once 'mysql_connect.php';
    $conn = connectDB();
    $randn = "";
    for ($i=0;$i<8;$i++) {
        $randn .= rand(0,9);
    }
    //echo $randn;
//    $conn->query("insert into login_recond(recondnumber)VALUES ('$randn')");
?>

<!--<img src="http://qr.topscan.com/api.php?text=--><?php //echo $randn?><!--" width="300">-->
<input hidden="hidden" type="text" name="recondnumber" id="recondnumber" value="<?php echo $randn; ?>">
</body>

<script>
    function polling() {
        //执行轮询操作
        var xmlHTTP;
        if (window.XMLHttpRequest) {
            xmlHTTP = new XMLHttpRequest();
        } else  {
            xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlHTTP.onreadystatechange = function () {
            if (xmlHTTP.status == 200 && xmlHTTP.readyState == 4) {
                var result = xmlHTTP.responseText;
                if (result == 'true') {
                    window.location.href = 'welcome.php';
                }
            }
        }
        var recondnumber = document.getElementById('recondnumber').value;
        alert(recondnumber);

        xmlHTTP.open("GET", "polling.php?recondnumber="+recondnumber, true);
        xmlHTTP.send();
    }
    setInterval("polling()", 1000);
</script>
</html>