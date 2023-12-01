<?php 
    $idacc = $_GET['id'] ?? 0;
    $account = AccountFind("id = ".$idacc);
    $listBill = BillAll(['*'],"bill_userid = ".$idacc);
    $echoBill = [];
    foreach($listBill as $bill){
        $billStatus = BillStatusFind(['sb_name'],"id = ".$bill['bill_status']);
        $bill['echo_status'] = $billStatus['sb_name'];
        $echoBill[] = $bill;
    }
    $listComment = CommentAll(['*'],"com_userid=".$idacc);
    $echoListComment = [];
    foreach ($listComment as $comment) {
        $pro = ProductFind("id = ".$comment["com_proid"]);
        $cm = $comment;
        if(!empty($pro)) {
            $cm['pro_name'] = $pro['pro_name'];
        }else{
            $cm['pro_name'] = "Sản phẩm đã bị xóa";
        }
        $echoListComment[] = $cm;
    }
    require_once $views.'account/accountInfo.php';
?>