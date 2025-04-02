<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bàn Cờ Vua</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Bàn Cờ Vua</h1>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                if (($row + $col) % 2 == 0) {
                    echo "<td class='white'></td>";
                } else {
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>