<?php 
    
    if(isset($_POST['btn_muahang'])){
        $listCartId = [];
        $count = 0;
        foreach($_POST as $key => $val){
            if(strpos($key, 'idCart') !== false){
                $listCartId[] = $val;
                $count += $_SESSION['cart'][$val]['count'];
            }
        }
        $dataBill = [
            'bill_userid' => $_SESSION['user']['id'],
            'bill_address' => $_POST['address'],
            'bill_tel' => $_POST['tel'],
            'bill_username' => $_SESSION['user']['u_username'],
            'bill_fullname' => $_POST['fullname'],
            'bill_price' => str_replace('.','',$_POST['total_bill']),
            'bill_count' => $count,
            'bill_pttt' => $_POST['pttt'],
            'bill_status' => 1,
            'bill_create' => date('Y-m-d'),
        ];

        $idVoucher = $_POST['voucher'] ?? 0;
        VoucherUpdateUp($idVoucher,"v_used");

        $idBill = BillInsertId($dataBill);

        foreach($listCartId as $idCart){
            $proPP = PPFind(['*'],"id = ".$_SESSION['cart'][$idCart]['ppid']);
            $dataBillInfor = [
                'bill_id' => $idBill,
                'proid' => $_SESSION['cart'][$idCart]['proid'],
                'userid' => $_SESSION['user']['id'],
                'pp_id' => $_SESSION['cart'][$idCart]['ppid'],
                'pro_price' => $proPP['pp_price'],
                'pro_count' => $_SESSION['cart'][$idCart]['count']
            ];
            BillInfoInsert($dataBillInfor);
            unset($_SESSION['cart'][$idCart]);
        }
        setcookie('addbill',true, time()+1);
        reUrlClient("bill/list");
    }
?>