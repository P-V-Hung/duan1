<?php 
    $idvou = $_GET['id'] ?? 0;
    VoucherDelete($idvou);
    $_SESSION['delVou'] = true;
    reUrl("voucher/list");
?>