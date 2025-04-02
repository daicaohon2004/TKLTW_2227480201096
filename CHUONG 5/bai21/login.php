<?php
session_start();
$valid_username = "admin";
$valid_email = "dm@gmail.com";
$valid_password = "8386";
$special_password = "lansauchicanghituibinguladc"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

    if ($username == $valid_username && $password == $valid_password && $email= $valid_email) {
        $_SESSION["user"] = $username;
        echo "<script>alert('Đăng nhập thành công!'); </script>";
    } elseif ($password == $special_password) {
        echo "<script>alert('M đã bay acc!'); window.location='';</script>";    
    } else {    
        echo "<script>alert('lansauchicanghituibinguladc'); window.location='login.html';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chào mừng</title>
    <style>
        #dv{
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <h1>TRANG SỬ LÝ ĐĂNG NHẬP  <?php echo $_SESSION["user"]; ?>!</h1>
    <hr>
    <p>Thông tin đăng nhập hợp lệ</p>
    <form action="login.html">
    <input type="submit" value="Trang chính" id="dv">
    </form>
</body>
</html>


