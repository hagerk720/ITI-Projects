<?php
$id =  trim($_SERVER['REQUEST_URI'], '/');
$product = $db->get_record_by_id($id)[0];
// var_dump($product);
// $product_json = json_encode($product);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<style>
    body {

        height: 100vh;
        background-color: #112D4E;
        background-image: url('../bg.svg');
        background-repeat: no-repeat;
    }
</style>

<body class="d-flex justify-content-center align-items-center">

    <div class="card mb-3 h-50" style="max-width: 540px;background-color:#F0F5F9">
        <div class="row g-0 h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 h-100">
                <img src="../<?php echo   '/images/' . $product['photo'] ?>" class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8 d-flex justify-content-center align-items-center">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['product_name'] ?></h5>
                    <p class="card-text">category : <?php echo $product['category'] ?></p>
                    <p class="card-text"><small class="text-muted">Rating : <?php echo $product['rating'] ?></small></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>