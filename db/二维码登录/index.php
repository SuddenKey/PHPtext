<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QRlogin</title>
</head>
<body>

<?php
    $randn = "";
for ($i=0;$i<8;$i++) {
    $randn .= rand(0,9);
}
?>


<img src="http://qr.topscan.com/api.php?text=<?php echo $randn?>" width="300">

</body>
</html>