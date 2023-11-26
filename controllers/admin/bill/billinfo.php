<?php 
    $idBill = $_GET['id'] ?? 0;
    $bill = BillFind(['*'], "id = " . $idBill);
    $listBillInfo = BillInfoAll(['*'], "bill_id = " . $idBill);
    $echoListBI = [];
    foreach ($listBillInfo as $bi) {
        $pro = ProductFind('id = ' . $bi['proid'], ['id', 'pro_name', 'pro_img']);
        $proPP = PPFind(['pp_color', 'pp_memory','pp_price'], 'id = ' . $bi['pp_id']);
        $data = [
                'idpro' => $pro['id'],
                'img' => $pro['pro_img'],
                'name' => $pro['pro_name'],
                'color' => $proPP['pp_color'],
                'memory' => $proPP['pp_memory'],
                'price' => $bi['pro_price'] ,
                'count' => $bi['pro_count'],
                'total' => $bi['pro_price'] * $bi['pro_count']
            ];
        $echoListBI[] = $data;
    }

    $listStatus = BillStatusAll();

    if(isset($_POST['btn-update-sb'])){
        if($bill['bill_status'] == 5){
            logWarning("Người dùng đã nhận hàng");
        }
        else if($bill['bill_status'] == 6){
            logError("Đơn hàng đã bị hủy!");
        }else{
            $data = [
                'bill_status' => $_POST['status']
            ];
            BillUpdate($idBill,$data);
            reUrl('bill/list');
        }
    }
    require $views."bill/billinfo.php";
?>