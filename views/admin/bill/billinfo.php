<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Chi tiết đơn hàng</h2>
    <h5 class="pt-5" style="text-align: center;">Thông tin vận chuyển</h5>
    <form action="" method="post">
        <table class="table-hung2">
            <tr>
                <td>Username:
                <td><?= $bill['bill_username'] ?></td>
            </tr>
            <tr>
                <td>Họ và tên: </td>
                <td><?= $bill['bill_fullname'] ?></td>
            </tr>
            <tr>
                <td>SĐT</td>
                <td><?= $bill['bill_tel'] ?></td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><?= $bill['bill_address'] ?></td>
            </tr>
            <tr>
                <td>Số lượng: </td>
                <td><?= $bill['bill_count'] ?></td>
            </tr>
            <tr>
                <td>Thanh toán: </td>
                <td><?= number_format($bill['bill_price']) ?></td>
            </tr>
            <tr>
                <td>PTTT: </td>
                <td><?= $bill['bill_pttt'] ?></td>
            </tr>
            <tr>
                <td>Ngày đặt: </td>
                <td><?= date('d-m-Y', strtotime($bill['bill_create'])) ?></td>
            </tr>
            <tr>
                <td>Trạng thái: </td>
                <td>
                    <select name="status" id="">
                        <?php foreach($listStatus as $status): ?>
                            <option <?=$status['id']==$bill['bill_status']?'selected':''?> value="<?=$status['id']?>"><?=$status['sb_name']?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <input type="submit" value="Cập nhật trạng thái" name="btn-update-sb" class="btn btn-outline-dark">
        </div>
    </form>

    <h5 class="pt-5" style="text-align: center;">Sản phẩm</h5>
    <div class="listcart border mt-4 pt-3 ">
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
        <?php foreach ($echoListBI as $key => $bi) : ?>
            <div class="cart d-flex align-items-center justify-content-between px-3">
                <div class="cart_image">
                    <img src="<?= $pathUpload . $bi['img'] ?>" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6><a href="<?= $adminUrl . "product/chitiet&id=" . $bi['idpro'] ?>"><?= $bi['name'] ?></a></h6>
                </div>
                <div class="cart_proinfor">
                    <p>Phân loại: <?= $bi['color'] ?></p>
                    <p>Cấu hình: <?= $bi['memory'] ?></p>
                </div>
                <div class="cart_price">
                    <p><?= number_format($bi['price']) ?> vnđ</p>
                </div>
                <div class="cart_count">
                    <p><?= $bi['count'] ?></p>
                </div>
                <div class="cart_total">
                    <p><?= number_format($bi['total']) ?> vnđ</p>
                </div>
            </div>
            <hr>
        <?php endforeach ?>
        <div class="cart_footer mt-5 p-4 position-sticky">
            <div class="cart_btn d-flex justify-content-between align-items-center">
                <div class="cart_btn_thaotac d-flex align-items-center">
                    <?php 
                        if($bill['bill_status']==6){
                    ?>
                        <td><a href="<?=$adminUrl."bill/delete&id=".$bill["id"]?>" class="btn btn-outline-dark">Xóa đơn hàng</a></td>
                    <?php
                        }
                    ?>
                </div>
                <p>Tổng bill: <span style="font-size: 1.5rem;color: red;"><?= number_format($bill['bill_price']) ?></span> <span style="color: red;">VNĐ</span></p>
            </div>
        </div>
    </div>
</div>