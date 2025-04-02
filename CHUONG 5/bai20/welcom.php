<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo "<script>alert('Bạn chưa đăng nhập!'); window.location='index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào mừng</title>
    <script>
        // Sau 3 phút (180,000 milliseconds), quay về trang đăng nhập
        setTimeout(function() {
            alert("Phiên đăng nhập đã hết hạn. Bạn sẽ quay lại trang đăng nhập.");
            window.location = "logout.php";
        }, 180000);
    </script>
</head>
<body>
    <h1>Xin chào, <?php echo $_SESSION["user"]; ?>!</h1>
    <p>Bạn có 3 phút trước khi phiên đăng nhập hết hạn.</p>
    <a href="BAI20.PHP">Đăng xuất ngay</a>
</body>
</html>
