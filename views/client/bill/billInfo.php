<main class="container">
    <h5 class="pt-5">Chi tiết tin đơn hàng</h5>
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
                    <img src="<?=$pathUpload.$bi['img']?>" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6><a href="<?=$clientUrl."chitietsp&id=".$bi['idpro']?>"><?=$bi['name']?></a></h6>
                </div>
                <div class="cart_proinfor">
                    <p>Phân loại: <?=$bi['color']?></p>
                    <p>Cấu hình: <?=$bi['memory']?></p>
                </div>
                <div class="cart_price">
                    <p><?=number_format($bi['price'])?> vnđ</p>
                </div>
                <div class="cart_count">
                    <p><?=$bi['count']?></p>
            </div>
            <div class="cart_total">
                <p><?=number_format($bi['total'])?> vnđ</p>
            </div>
        </div>
        <hr>
        <?php endforeach ?>
        <div class="cart_footer mt-5 p-4 position-sticky">
            <div class="cart_btn d-flex justify-content-between align-items-center">
                <div class="cart_btn_thaotac d-flex align-items-center">
                    
                </div>
                <p>Tổng bill: <span style="font-size: 1.5rem;color: red;"><?=number_format($bill['bill_price'])?></span> <span style="color: red;">VNĐ</span></p>
            </div>
        </div>
    </div>
</main>