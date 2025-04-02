<?php
session_start();
$valid_username = "admin";
$valid_password = "1234";
$special_password = "lansauchicanghituibinguladc"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION["user"] = $username;
        echo "<script>alert('Đăng nhập thành công!'); window.location='welcom.php';</script>";
    } elseif ($password == $special_password) {
        echo "<script>alert('M đã bay acc!'); window.location='';</script>";    
    } else {
        echo "<script>alert('lansauchicanghituibinguladc'); window.location='BAI20.PHP';</script>";
    }
}
?>
