<?php
if (!isset($_SESSION['user'])) {
    reUrlClient('/');
}
$dataCart = [];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$_SESSION['cart'] = array_values($_SESSION['cart']);
if (isset($_POST['btn-add-cart'])) {
    $_SESSION['cart'][] = [
        'proid' => $_POST['idpro'],
        'ppid' => $_POST['idpp'],
        'userid' => $_SESSION['user']['id'],
        'count' => $_POST['count'],
    ];
}
foreach ($_SESSION['cart'] as $cart) {
    $pro = ProductFind("id = " . $cart['proid'], ['pro_name', 'pro_img']);
    $proPP = PPFind(['pp_color', 'pp_memory', 'pp_price'], "id = " . $cart['ppid']);
    $dataCart[] = [
        'id' => $cart['proid'],
        'img' => $pro['pro_img'],
        'name' => $pro['pro_name'],
        'color' => $proPP['pp_color'],
        'memory' => $proPP['pp_memory'],
        'price' => $proPP['pp_price'],
        'count' => $cart['count'],
        'total' => $proPP['pp_price'] * $cart['count']
    ];
}

if(isset($_POST['btn_deletes-cart'])){
    $btn = array_pop($_POST);
    $_POST = array_values($_POST);
    for($i = 0; $i < count($_POST); $i++){
        unset($_SESSION['cart'][$_POST[$i]]);
    }
    reUrlClient('cart');
}
require_once $views . "cart/cart.php";
