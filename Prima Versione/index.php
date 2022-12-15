<?php
include './database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <?php foreach ($database as $elem) { ?>

            <div class="card col-3">
                <img src="<?php echo $elem['poster'] ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    <h4 class="card-title, text-white">
                        <?php echo $elem['title'] ?>
                    </h4>
                    <h5 class="card-title">
                        <?php echo $elem['author'] ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $elem['year'] ?>
                    </p>
                </div>
            </div>


            <?php } ?>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>