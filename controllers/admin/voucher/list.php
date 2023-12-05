<?php 
    $listVouchers = VoucherAll();
    $check = false;
    if(isset($_POST['btn-deletes-v'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            VoucherDelete($id);
            $check = true;
            // reUrl('voucher/list');
        }
        if($check) $_SESSION["delVous"] = true;
    } 
    if(isset($_SESSION['delVou'])){
        logSuccess('Xóa mã giảm giá thành công');
        unset($_SESSION['delVou']);
    }
    if(isset($_SESSION['delVous'])){
        logSuccess('Xóa nhiều mã giảm giá thành công');
        unset($_SESSION['delVous']);
    }
    require $views."voucher/list.php";
?>