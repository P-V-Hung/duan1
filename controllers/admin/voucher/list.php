<?php 
    $listVouchers = VoucherAll();
    if(isset($_POST['btn-deletes-v'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            VoucherDelete($id);
            reUrl('voucher/list');
        }
    } 
    if(isset($_SESSION['delVou'])){
        logSuccess('Xóa mã giảm giá thành công');
        unset($_SESSION['delVou']);
    }
    require $views."voucher/list.php";
?>