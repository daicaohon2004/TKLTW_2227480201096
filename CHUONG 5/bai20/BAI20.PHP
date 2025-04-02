<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .header {
            width: 18%;
            background-color: #007bff;
            text-align: center;
            padding: 15px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }

        .show-password {
            text-align: left;
            font-size: 14px;
            margin: 10px 0;
        }
    </style>
    <script>
        function hienMatKhau() {
            var passField = document.getElementById("password");
            passField.type = (passField.type === "password") ? "text" : "password";
        }
    </script>
</head>
<body>

    <div class="header">ĐĂNG NHẬP THÀNH VIÊN</div>

    <div class="login-container">
        <h1>Log In</h1>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Email hoặc Username" required>
            <input type="password" name="password" placeholder="Mật khẩu" id="password" required>
            
            <div class="show-password">
                <input type="checkbox" onclick="hienMatKhau()"> Hiện mật khẩu
            </div>

            <input type="submit" value="Đăng Nhập" class="btn">
        </form>
        
        <p class="footer">
            <a href="#">Quên mật khẩu?</a>
        </p>
    </div>

</body>
</html>
