<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>แสดงตารางสูตรคูณ</h1>
        <form method="post" action="php_03.php"><!--method post เพื่อรับแม่สูตรคูณจากผู้ใช้งาน-->
            <div class="mb-3">
                <label for="multiplicationTable" class="form-label">กรอกแม่สูตรคูณ</label>
                <input type="number" name="number" class="form-control" id="multiplicationTable" placeholder="ระบุแม่สูตรคูณ (1-12)" required>
            </div>
            <button type="submit" class="btn btn-primary">แสดงผล</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["number"])) { //ตรวจสอบว่ามีดารส่งฟอร์มและรับค่าจากฟอร์ม>
            $number = intval($_POST["number"]); // รับค่าแม่สูตรคูณ แปลงค่าที่ระบมาเป็นจำนวนเต็มด้วย intval
            if ($number >= 1 && $number <= 12) {
                echo '<h2 class="mt-4">ตารางสูตรคูณแม่ ' . $number . '</h2>';
                 //. $number . หมายถึง การนำค่าของตัวแปร $number มาต่อกับข้อความที่อยู่ก่อนหน้า และข้อความที่อยู่ถัดไป (</h2>)
                echo '<table class="table table-bordered mt-3">';
                //ตารางแสดงผลในรูปแบบ Bootstrap
                for ($i = 1; $i <= 12; $i++) {
                    $result = $number * $i;
                    echo "<tr><td>$number x $i</td><td>$result</td></tr>";
                }
                echo '</table>';
            } else {
                echo '<div class="alert alert-danger mt-3" role="alert">กรุณาระบุแม่สูตรคูณระหว่าง 1 ถึง 12</div>';
            }
        }
        ?>
    </div>
</body>

</html>