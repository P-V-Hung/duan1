<?php 
    $listBill = BillAll(['*'],"1 order by id desc");
    $echoBill = [];
    if(isset($_SESSION['thongbao'])){
        logSuccess("Cập nhật thành công");
        unset($_SESSION['thongbao']);
    }
    foreach($listBill as $bill){
        $billStatus = BillStatusFind(['sb_name'],"id = ".$bill['bill_status']);
        $bill['echo_status'] = $billStatus['sb_name'];
        $echoBill[] = $bill;
    }
    require_once $views."bill/list.php";
?>