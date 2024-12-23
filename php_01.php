<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <?php
        // กำหนดค่า $my_var
        $my_var = 2;
        ?>
        <h1>สูตรคูณแม่ <?php echo $my_var; ?></h1>
        <!-- สร้างตารางสำหรับสูตรคูณ -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>สูตรคูณ</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
            <tbody>
        <div class="row">
            <?php
            // ลูปแสดงสูตรคูณ
            for ($i = 1; $i <= 12; $i++) {
                echo "<tr>
                        <td>{$my_var} x {$i} = </td>
                        <td>" . ($my_var * $i) . "</td>
                      </tr>";
            }
            ?>
            </tbody>
            </table>

        </div>
    </div>
</body>

</html>
