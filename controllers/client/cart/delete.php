<?php
    $key = $_GET['key'] ?? null;
    if($key != null){
        unset($_SESSION['cart'][$key]);
    }
    reUrlClient("cart");
?>