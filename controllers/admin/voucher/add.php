<?php

$listVouchers = VoucherAll();
if(isset($_POST['btn_add-vou'])){
    $data = [
        'v_name' => strtoupper($_POST['v_name']),
        'v_price' => $_POST['v_price'],
        'v_count' => $_POST['v_count'],
        'v_create' => $_POST['v_create'],
        'v_arrtive' => $_POST['v_arrtive']
    ];
    VoucherInsert($data);
    $thongbao = "Thêm thành công";
}

require_once $views."voucher/add.php";
?>