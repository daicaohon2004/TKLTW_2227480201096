<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1><b>TÍNH USCLN VÀ BSCNN</b></h1></center>
    <hr>
    <div>
        <form method="post">
            Số thứ 1: <input type="text" id="a" name="so1"> <br><br>
            Số thứ 2: <input type="text" id="b" name="so2"> <br><br>
            Kết quả: <input type="text" id="c" name="ketqua" value=""> <br><br>

            <input type="submit" name="d" value="USCLN">
            <input type="submit" name="f" value="BSCNN">
        </form>
    </div>
    <?php   
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function bscnn($a, $b) {
        return abs($a * $b) / uscln($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $so1 = intval($_POST["so1"]);
        $so2 = intval($_POST["so2"]);

        if (isset($_POST['d'])) {
            $result = "USCLN là: " . uscln($so1, $so2);
        } elseif (isset($_POST['f'])) {
            $result = "BSCNN là: " . bscnn($so1, $so2);
        }

        echo "<script>document.getElementById('c').value = '$result';</script>";
    }
    ?>
</body>
</html>
