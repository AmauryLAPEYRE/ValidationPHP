<?php
require_once('./templates/general/header.php');

$uri = $_SERVER['REQUEST_URI'];

if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
    if($uri == "/") {
        require_once('./templates/pages/ProductList.php');
    } elseif($uri == "/basket" || $uri == "/basket.php") {
        require_once('./templates/pages/basket.php');
    }
} else {
    require_once('./templates/pages/account.php');
}

require_once('./templates/general/footer.php');