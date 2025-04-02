<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Xử Lý Ma Trận Số Thực</h1>
    <?php
    $matrix = [
        [1.1, 2.3, 3.1, 4.0, 5.0],
        [6.2, 7.7, 8.8, 9.5, 1.2],
        [4.6, 1.9, 3.6, 8.9, 1.5],
        [1.6, 1.7, 1.8, 1.9, 2.0],
    ];
    function findMax($matrix) {
        $max = $matrix[0][0];
        foreach ($matrix as $row) {
            foreach ($row as $value) {
                if ($value > $max) {
                    $max = $value;
                }
            }
        }
        return $max;
    }

    function findMin($matrix) {
        $min = $matrix[0][0];
        foreach ($matrix as $row) {
            foreach ($row as $value) {
                if ($value < $min) {
                    $min = $value;
                }
            }
        }
        return $min;
    }
    function calculateSum($matrix) {
        $sum = 0;
        foreach ($matrix as $row) {
            foreach ($row as $value) {
                $sum += $value;
            }
        }
        return $sum;
    }
    function printMatrix($matrix) {
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";
        foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "<h2>Ma Trận:</h2>";
    printMatrix($matrix);

    echo "<h2>Kết Quả:</h2>";
    echo "Số lớn nhất trong ma trận: <strong>" . findMax($matrix) . "</strong><br>";
    echo "Số nhỏ nhất trong ma trận: <strong>" . findMin($matrix) . "</strong><br>";
    echo "Tổng các phần tử trong ma trận: <strong>" . calculateSum($matrix) . "</strong><br>";
    ?>
</body>
</html>
</body>
</html>