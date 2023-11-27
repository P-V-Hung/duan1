<?php 
    $idBill = $_GET['id']??0;
    $listBillInfo = BillInfoAll(['*'],"bill_id = ".$idBill);
    foreach($listBillInfo as $bi){
        BillDelete($bi['id']);
    }
    BillDelete($idBill);
    reUrl("bill/list");
?>