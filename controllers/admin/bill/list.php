<?php 
    $listBill = BillAll(['*']);
    $echoBill = [];
    foreach($listBill as $bill){
        $billStatus = BillStatusFind(['sb_name'],"id = ".$bill['bill_status']);
        $bill['echo_status'] = $billStatus['sb_name'];
        $echoBill[] = $bill;
    }
    require_once $views."bill/list.php";
?>