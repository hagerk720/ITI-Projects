<?php
require_once("vendor/autoload.php");
session_start();
$db = new MySQLHandler("items");
// require_once('views/all.php');
$id =  trim($_SERVER['REQUEST_URI'], '/');
if (is_numeric($id)) {
    require_once('views/product_details.php');
} else {
    require_once('views/all.php');
}
if (
    isset($_REQUEST['PRODUCT_code'])
    && isset($_REQUEST['product_name']) && isset($_REQUEST['list_price'])
    && isset($_REQUEST['Units_In_Stock']) && isset($_REQUEST['category'])
    && isset($_REQUEST['Rating'])
) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $db->save($_POST);
    }
}
if (strpos($_SERVER['REQUEST_URI'], 'delete')) {
    $id_delete =  trim($_SERVER['REQUEST_URI'], '/index.php/delete/');

    if ($id_delete) {
        $db->delete($id_delete);
        header('Location: /index.php');
        die();
    }
}
