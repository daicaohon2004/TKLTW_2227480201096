<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng Cửu Chương</title>
</head>
<body>
    <h1>Bảng Cửu Chương</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
