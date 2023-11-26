<?php 
    $idBill = $_GET['id']??0;
    $data = [
        'bill_status' => 6
    ];
    setcookie('udbil',true, time() + 1);
    BillUpdate($idBill,$data);
    reUrlClient("bill/list");
?>