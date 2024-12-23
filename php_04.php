<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>แสดงข้อมูลตัวเลขจากช่วงที่กำหนด</h1>
        <form method="post" action="php_04.php"> <!-- ใช้ method POST -->
            <div class="mb-3">
                <label for="start" class="form-label">เริ่มต้น (Start)</label>
                <input type="number" name="start" class="form-control" id="start" placeholder="กรอกค่าตัวเลขเริ่มต้น" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">สิ้นสุด (End)</label>
                <input type="number" name="end" class="form-control" id="end" placeholder="กรอกค่าตัวเลขสิ้นสุด" required>
            </div>
            <button type="submit" class="btn btn-primary">แสดงผล</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["start"]) && isset($_POST["end"])) {
            $start = intval($_POST["start"]);
            $end = intval($_POST["end"]);

            if ($start > $end) {
                echo '<div class="alert alert-danger mt-4">กรุณากรอกค่าตัวเลขเริ่มต้นน้อยกว่าหรือเท่ากับค่าตัวเลขสิ้นสุด</div>';
            } else {
                echo '<div class="mt-4">';
                echo '<h2>ผลลัพธ์จากช่วงตัวเลข ' . $start . ' ถึง ' . $end . '</h2>';
                echo '<div class="row">';

                for ($i = $start; $i <= $end; $i++) {
                    $type = ($i % 2 === 0) ? "เป็นเลขคู่" : "เป็นเลขคี่";
                    echo '<div class="col-6 text-end h4">เลข ' . $i . '</div>';
                    echo '<div class="col-6 text-start h4">' . $type . '</div>';
                }
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>
