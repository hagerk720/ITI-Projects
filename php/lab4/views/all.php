<?php

$rows_number = $db->get_number_of_rows('items');
$max_page = (int)($rows_number / __RECORDS_PER_PAGE__);
$page = isset($_GET["page"]) && is_numeric($_GET["page"])  ? (int)$_GET["page"] : 0;
$page_items = $page * __RECORDS_PER_PAGE__;
// $products = $db->get_all_data_per_page(array(), $page_items);
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
    $products = $db->search("product_name", $searchValue);
} else {
    $products = $db->get_all_data_per_page(array(), $page_items);
}
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
    <div class="container d-flex justify-content-center align-items-center flex-column m-0">
        <div class="row mb-3 w-100">
            <div class="col-8">
                <form action="">
                    <div class="input-group w-100">

                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" name="search" placeholder="search" />
                        </div>
                        <button type="submit" class="btn btn-light">
                            <i class="fas fa-search" style=" color: #112D4E; "></i>
                        </button>
                    </div>

                </form>

            </div>
            <div class="col-4">
                <a href="views/add_product.php">
                    <button type="button" class=" btn btn-tertiary fw-bold" data-mdb-ripple-color="light" style="color: #F9F7F7;">Add Product</button>
                </a>
            </div>
        </div>
        <div class="row w-100">
            <table class="table table-hover table-striped" style="background-color:#F0F5F9; color:#52616B">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Inventory</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($products as  $p) {
                        echo "<tr>
                <th scope= 'row' >" . $p['id'] . "</th>
                <td >" . $p['product_name'] .  "</td>
                <td >" . $p['units_in_stock'] . "  item in stock</td>
                <td >" . $p['list_price'] . "</td>
                <td ><a href='"  . $p['id'] . "'>view</a></td>
                <td ><a href='" . $_SERVER["PHP_SELF"] . '/delete/' . $p['id'] . "'>❌</a></td>
              </tr>";
                    }
                    ?>
            </table>

        </div>
        <div class="row w-25 ">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="<?php echo $_SERVER["PHP_SELF"] . "?page=" . ($page == 0 ? 0 : $page - 1); ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 0; $i <= $max_page; $i++) {
                        echo     "<li class='page-item'><a class='page-link' href=" . ($_SERVER["PHP_SELF"] . "?page=" . $i) . ">$i</a></li>";
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo $_SERVER["PHP_SELF"] . "?page=" . ($page == $max_page ? $max_page : $page + 1); ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/c8d915bf3e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>