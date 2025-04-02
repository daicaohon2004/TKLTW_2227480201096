<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Năm</title>
    <style>
        h1{
        color: while;
        }
    </style>
</head>
<body>
    <h1>Danh Sách Năm Từ 1900 Đến Hiện Tại</h1>
    <form>
        <label for="year">Chọn Năm:</label>
        <select name="year" id="year">
            <?php
            $currentYear = date("Y"); 
            for ($year = 1900; $year <= $currentYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>