<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Chào bạn!<br>";
if (isset($_COOKIE['thoiGianTruyCap'])) {
    echo "Thời gian truy cập gần đây nhất là: " . date('d/m/Y H:i:s', $_COOKIE['thoiGianTruyCap']) . "<br>";
} else {
    echo "Đây là lần đầu bạn truy cập!<br>";
}
setcookie('thoiGianTruyCap', time(), time() + 600);
?>

</body>
</html>