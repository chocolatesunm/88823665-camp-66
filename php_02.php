<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel="stylesheet integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
        <h1> จำนวน 1 ถึง 100 เป็นเลขคู่หรือเลขคี่</h1>
        <div class="row">
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    // ตรวจสอบว่าเป็นเลขคู่หรือเลขคี่
                    $type = ($i % 2 === 0) ? "เป็นเลขคู่" : "เป็นเลขคี่";
                    echo '<div class="col-6 text-end h4">เลข ' . $i . '</div>';//แสดงเลข
                    echo '<div class="col-6 text-start h4">' . $type . '</div>';//แสดงว่าเป็นเลขคู่หรือเลขคี่
                }
                ?>
        </div>
        </div>
    </body>
</html>