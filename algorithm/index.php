<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="card" style="width: 50%">
            <h1 class="text-center mt-5">Mini-Max Sum</h1>
            <form action="function.php" method="POST">
                <div class="mx-5 mb-5">
                    <label for="">Nhập dãy số</label>
                    <input type="text" name="arr" class="form-control my-3">
                    <button class="btn btn-primary" style="width: 100%" type="submit">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_GET['min']) && isset($_GET['max'])) {
                ?>

                <h1 class="text-center">Kết quả</h1>
                <h4 class="text-center my-3">
                    <?php echo $_GET['min'] . ' ' . $_GET['max']; ?> <br />
                    <a href="/index.php"><button class="btn btn-success mt-3">Reset</button></a>
                </h4>

                <?php
            }
            ?>
        </div>
    </div>

</body>

</html>