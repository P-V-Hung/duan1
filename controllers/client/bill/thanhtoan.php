<?php
    $btn = array_pop($_POST);
    $_POST = array_values($_POST);
    $bill = [];
    $listCatId = [];
    foreach($_POST as $cartId){
        $bill[] = $_SESSION['cart'][$cartId];
        $listCatId[] = $cartId[0];
    }
    
    $dataBill = [];
    $totalAll = 0;
    foreach ($bill as $cart) {
        $pro = ProductFind("id = " . $cart['proid'], ['pro_name', 'pro_img']);
        $proPP = PPFind(['pp_color', 'pp_memory', 'pp_price'], "id = " . $cart['ppid']);
        $dataBill[] = [
            'id' => $cart['proid'],
            'img' => $pro['pro_img'],
            'name' => $pro['pro_name'],
            'color' => $proPP['pp_color'],
            'memory' => $proPP['pp_memory'],
            'price' => $proPP['pp_price'],
            'count' => $cart['count'],
            'total' => $proPP['pp_price'] * $cart['count']
        ];
        $totalAll += $proPP['pp_price'] * $cart['count'];
    }
    
    $listVoucher = VoucherAll();
    require_once $views . "bill/thanhtoan.php";
?>