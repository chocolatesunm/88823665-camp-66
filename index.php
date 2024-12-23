<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5"><!---margintop5-->
            <!-- กรอบข้อมูล -->
            <div class="border p-3 mb-4"> <!--/สำหรับเว้นระยะภายในกรอบ -p padding-->
                <h1 class="h5 mb-3">Email: <!--/สำหรับเว้นระยะห่างข้อความ-->
                    <span class="text-muted">
                        <?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>
                    </span>
                </h1>
                <h1 class="h5">Detail: 
                    <span class="text-muted">
                        <?php echo isset($_REQUEST['detail']) ? $_REQUEST['detail'] : " "; ?>
                    </span>
                </h1>
            </div>
            <!-- ฟอร์ม -->
            <form method="post" action="index_submit.php" class="border p-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 text-end">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>
