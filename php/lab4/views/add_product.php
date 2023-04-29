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

<body>
    <div class="container mt-3 p-3 " style="width : 500px ;background-color:rgba(238, 238, 238, 0.2);">
        <form method="post" action="/index.php" style="color: aliceblue;">
            <center>
                <h2>Product Details </h2>
            </center>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Product Code</label>
                        <input type="text" id="form6Example2" class="form-control" name="PRODUCT_code" required />
                    </div>
                </div>
            </div>

            <!-- Product Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Product Name</label>
                <input type="text" id="form6Example3" class="form-control" required name="product_name" />
            </div>

            <!-- Price input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Price</label>
                <input type="Number" id="form6Example4" class="form-control" required name="list_price" />
            </div>

            <!-- Units In Stock input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Units In Stock</label>
                <input type="Number" id="form6Example5" class="form-control" required name="Units_In_Stock" />
            </div>

            <!-- Category input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Category</label>
                <input type="text" id="form6Example6" class="form-control" required name="category" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Rating</label>
                <input type="Number" id="form6Example6" class="form-control" required name="Rating" />
            </div>

            <!-- Submit button -->
            <center>
                <button type="submit" class="btn btn-light btn-block mb-4">Add product</button>

            </center>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>