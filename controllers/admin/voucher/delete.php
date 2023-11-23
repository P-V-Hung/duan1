<?php 
    $idvou = $_GET['id'] ?? 0;
    VoucherDelete($idvou);
    reUrl ("voucher/list");
?>