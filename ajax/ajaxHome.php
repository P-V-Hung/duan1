<?php 
    require_once "../config/pdo.php";
    require_once "../config/function.php";
    require_once "../models/BillModel.php";
    require_once "../models/ProductModel.php";
    require_once "../models/AccountModel.php";

    if(isset($_POST['table'])){
        $output = [];
        switch($_POST['table']){
            case "userTiemNang": {
                $listBill = BillAll(['bill_userid','SUM(bill_price) as total_price',"SUM(bill_count) as total_count"],"1 group by bill_userid order by total_price limit 10");
                foreach($listBill as $bill){
                    $user = AccountFind("id = ".$bill['bill_userid']);
                    $data = [
                        'iduser' => $user['id'],
                        'username' => $user['u_username'],
                        'count' => $bill['total_count'],
                        'total' => $bill['total_price'],
                    ];
                    $output[] = $data;
                }
                break;
            }
        }
        echo json_encode($output);
    }

    
    
    if(isset($_POST['viewUser'])){
        $listBillInfo = BillInfoAll(['*'],"userid = ".$_POST['id']." order by id desc");
        $echoBill = [];
        $total = 0;
        foreach($listBillInfo as $bi){
            $pro = ProductFind("id = ".$bi['proid']);
            $proPP = PPFind(['*'],"id = ".$bi['pp_id']);
            $data = [
                'img' => $pro['pro_img'],
                'name' => $pro['pro_name'],
                'color' => $proPP['pp_color'],
                'memory' => $proPP['pp_memory'],
                'price' => $bi['pro_price'],
                'count' => $bi['pro_count'],
                'total' => $bi['pro_price'] * $bi['pro_count'],
            ];
            $echoBill[] = $data;
            $total += $bi['pro_price'] * $bi['pro_count'];
        }
?>
    <button class="btn btn-back" >< Trở lại</button>
<div class="listcart border mt-2 pt-3 ">
        <div class="cart d-flex align-items-center justify-content-between ps-2">
            <div class="cart_sp">
                <p>Sản phẩm</p>
            </div>
            <div class="ps-5">Tên sản phẩm</div>
            <div class="ps-3">Cấu hình</div>
            <div class="cart_price pe-4">
                <p>Đơn giá</p>
            </div>
            <div class="cart_count">
                <p>Số lượng</p>
            </div>
            <div class="cart_total pe-4">
                <p>Số tiền</p>
            </div>
        </div>
        <hr>
        <!-- Danh sách -->
        <?php 
            foreach($echoBill as $bill):
        ?>
            <div class="cart d-flex align-items-center justify-content-between px-3">
                <div class="cart_image">
                    <img src="./public/uploads/<?=$bill['img']?>" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6><?=$bill['name']?></h6>
                </div>
                <div class="cart_proinfor">
                    <p>Phân loại: <?=$bill['color']?></p>
                    <p>Cấu hình: <?=$bill['memory']?></p>
                </div>
                <div class="cart_price">
                    <p><?=number_format($bill['price'])?> VNĐ</p>
                </div>
                <div class="cart_count">
                    <p><?=$bill['count']?></p>
                </div>
                <div class="cart_total">
                    <p><?=number_format($bill['total'])?> VNĐ</p>
                </div>
            </div>
            <hr>
            <?php 
                endforeach;
            ?>
        <div class="cart_footer mt-5 p-4 position-sticky">
            <div class="cart_btn d-flex justify-content-between align-items-center">
                <p>Tổng: <span style="font-size: 1.5rem;color: red;"><?=number_format($total)?></span> <span style="color: red;">VNĐ</span></p>
                <div class="cart_btn_thaotac d-flex align-items-center">
                    <p>Số tiền thu về sau ưu đãi: <span style="font-size: 1.5rem;color: red;"><?=$_POST['total']?></span> <span style="color: red;">VNĐ</span></p>
                </div>
            </div>
        </div>
    </div>
<?php
        
    }
?>