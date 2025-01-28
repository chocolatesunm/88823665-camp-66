
<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="{{url('/mycontroller')}}">
            @csrf
            <div class="text-center">
                <h1 class="display-4 fw-bold"> หาสูตรคูณ </h1>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label display-6"> เลขสูตรคูณ </label>
                <input name="num" type="number" class="form-control" id="exampleFormControlInput1" placeholder="กรอกเลขที่ต้องการ" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">หาเลย!</button>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["num"];
                for ($i = 1; $i <= 12; $i++) {
                    $total = $number * $i;
            ?>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <span class="h6"><?php echo $number ?> x <?php echo $i ?></span>
                                <span class="h6 "> = </span>
                                <span class="h6"><?php echo $total ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </form>
    </div>
</body>

</html>