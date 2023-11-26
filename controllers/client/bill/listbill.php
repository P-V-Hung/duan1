<?php
    if(isset($_COOKIE['udbil'])){
        logSuccess("Đã hủy đơn hàng thành công","Thông báo");
    }
    $listBill = BillAll(['*'],"bill_userid = ".$_SESSION['user']['id']." order by id desc");
    $echoBill = [];
    foreach($listBill as $bill){
        $billStatus = BillStatusFind(['sb_name'],"id = ".$bill['bill_status']);
        $bill['echo_status'] = $billStatus['sb_name'];
        $echoBill[] = $bill;
    }
    require_once $views."bill/listbill.php";
?>