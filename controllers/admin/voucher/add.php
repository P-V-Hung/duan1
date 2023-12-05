<?php
$listVouchers = VoucherAll();
$check = 0;
if(isset($_POST['btn_add-vou'])){
    if($_POST['v_name'] == ''||$_POST['v_count'] == ''||$_POST['v_price'] == ''||$_POST['v_create'] == '') $check = 1;
    else {$data = [
        'v_name' => strtoupper($_POST['v_name']),
        'v_price' => $_POST['v_price'],
        'v_count' => $_POST['v_count'],
        'v_create' => $_POST['v_create'],
        'v_arrtive' => $_POST['v_arrtive']
    ];
    VoucherInsert($data);
    $check = 2;}
}
if($check == 2){
    logSuccess("Thêm mã giảm giá thành công");
}else if($check == 1){
    logWarning("Vui lòng nhập đầy đủ thông tin");
}
require_once $views."voucher/add.php";
?>