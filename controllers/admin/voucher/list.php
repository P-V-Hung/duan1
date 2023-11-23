<?php 
    $listVouchers = VoucherAll();
    if(isset($_POST['btn-deletes-v'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            VoucherDelete($id);
            reUrl('voucher/list');
        }
    } 
    require $views."voucher/list.php";
?>