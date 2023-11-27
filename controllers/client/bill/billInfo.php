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
    require_once $views . "bill/billInfo.php";
?>
