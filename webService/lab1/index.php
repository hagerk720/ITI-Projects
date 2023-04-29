<?php
require_once('vendor/autoload.php');
if (isset($_GET['guzzle'])) {
    require_once('views/guzzle_main.php');
} else {
    require_once('views/main.php');
}
