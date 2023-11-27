<main class="container-xxl mt-5">
    <div class="cart d-flex align-items-center justify-content-between">
        <div class="cart_input"></div>
        <div class="cart_sp ms-5">
            <p>Sản phẩm</p>
        </div>
        <div>Tên sản phẩm</div>
        <div>Cấu hình</div>
        <div></div>
        <div class="cart_price">
            <p>Đơn giá</p>
        </div>
        <div class="cart_count">
            <p>Số lượng</p>
        </div>
        <div class="cart_total">
            <p>Số tiền</p>
        </div>
        <div class="cart_thaotac">
            <p>Thao tác</p>
        </div>
    </div>
    <hr>
    <!-- Danh sách cart -->
    <form action="" method="post" class="">
        <?= empty($_SESSION['cart']) ? "<h3 class='pt-3' style='text-align: center;'>Không có sản phẩm nào</h3>" : '' ?>

        <div class="listcart">
            <?php foreach ($dataCart as $key => $cart) : ?>
                <div class="cart d-flex align-items-center justify-content-between">
                    <div class="cart_input">
                        <input type="checkbox" class="cart_sp_id" name="<?= $key ?>" value="<?= $key ?>" id="">
                    </div>
                    <div class="cart_image">
                        <img src="<?= $pathUpload . $cart['img'] ?>" width="100px" alt="">
                    </div>
                    <div class="cart_title">
                        <a href="<?= $clientUrl . "chitietsp&id=" . $cart['id'] ?>">
                            <h6><?= $cart['name'] ?></h6>
                        </a>
                    </div>
                    <div class="cart_proinfor">
                        <p>Phân loại : <?= $cart['color'] ?></p>
                        <p>Cấu hình: <?= $cart['memory'] ?></p>
                    </div>
                    <div class="cart_price">
                        <p><?= number_format($cart['price']) ?> vnđ</p>
                    </div>
                    <div class="cart_count">
                        <p><?= $cart['count'] ?></p>
                    </div>
                    <div class="cart_total">
                        <p><?= number_format($cart['total']) ?> vnđ</p>
                    </div>
                    <div class="cart_thaotac">
                        <a href="<?= $clientUrl . "cart/delete&key=$key" ?>">Xóa</a>
                    </div>
                </div>
                <hr>
            <?php endforeach ?>
        </div>
        <div class="cart_footer mt-5 p-4 position-sticky">
            <div class="cart_btn d-flex justify-content-between">
                <div class="cart_btn_thaotac d-flex align-items-center">
                    <div class="cart_all me-5">
                        <input type="checkbox" name="" id="cart_all">
                        <label for="cart_all">Chọn tất cả</label>
                    </div>
                    <input type="submit" class="btn btn-outline-dark" value="Xóa tất cả mục đã chọn" name="btn_deletes-cart">
                </div>
                <?php
                if (!empty($_SESSION['cart'])) {
                ?>
                    <button name="btn_buy" type="submit" class="btn btn-outline-danger">Mua hàng</button>
                <?php
                }
                ?>
            </div>
        </div>
    </form>
</main>
<script>
    let listInput = document.querySelectorAll(".cart_sp_id");
    let inputAll = document.getElementById("cart_all");
    inputAll.addEventListener("change", function() {
        if (inputAll.checked) {
            for (let i = 0; i < listInput.length; i++) {
                listInput[i].checked = true;
            }
        } else {
            for (let i = 0; i < listInput.length; i++) {
                listInput[i].checked = false;
            }
        }
    });
</script>