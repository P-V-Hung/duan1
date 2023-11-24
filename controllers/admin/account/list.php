<?php 
    $listAccount = AccountAll();
    if(isset($_POST['btn-deletes-v'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            VoucherDelete($id);
            reUrl('account/list');
        }
    } 
    require $views."account/list.php";
?>