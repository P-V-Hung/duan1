<?php
if (empty($_SESSION['user']['u_fullname']) || empty($_SESSION['user']['u_address']) || empty($_SESSION['user']['u_tel'])) {
    logInfo("Vui lòng cập nhật thông tin tài khoản! <a href='" . $clientUrl . "userInfor'>tại đây</a>");
}
?>
<main class="container-xxl mt-5">
    <form action="<?= $clientUrl . "bill/add" ?>" method="post">
        <div class="location border p-3">
            <div class="title_ship mb-1">
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</p>
            </div>
            <div class="location_ship d-flex">
                <b> <small class="textFullname"><?= $_SESSION['user']['u_fullname'] ?></small> (+<small class="textTel"><?= $_SESSION['user']['u_tel'] ?></small>)</b>
                <p class="ms-5 textAddress"><?= $_SESSION['user']['u_address'] ?></p>
                <span class="mx-4">Mặc định</span>
                <input type="button" class="ms-5" id="click_location" value="Thay đổi">
            </div>
        </div>
        <div id="location_ship" class="vorcher d-none position-fixed">
            <div class="voucher_bong d-flex justify-content-center align-items-center">
                <div class="voucher_content border p-4">
                    <div class="header_voucher d-flex justify-content-between mb-3 align-items-center">
                        <span class="fs-5">Địa chỉ của tôi</span>
                    </div>
                    <hr>
                    <!-- list voucher -->
                    <div class="voucher_content-main py-4 px-4 border my-4">
                        <input class="border my-2 py-2" type="text" value="<?= $_SESSION['user']['u_fullname'] ?>" name="fullname" placeholder="Họ và tên người nhận" id="fullname"><br>
                        <input class="border my-2 py-2" type="text" value="<?= $_SESSION['user']['u_address'] ?>" placeholder="Địa chỉ" name="address" id="address"><br>
                        <input class="border my-2 py-2" type="text" value="<?= $_SESSION['user']['u_tel'] ?>" name="tel" placeholder="Số điện thoại" id="tel"><br>
                    </div>
                    <div class="footer_voucher d-flex justify-content-end align-items-center">
                        <input type="button" id="location_back" value="Xác nhận" class="px-5 btn btn-outline-danger">
                    </div>
                </div>
            </div>
        </div>
        <!-- Danh sách sản phẩm -->
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
            <?php foreach ($dataBill as $key => $bill) : ?>
                <input type="hidden" name="idCart<?= $listCatId[$key] ?>" value="<?= $listCatId[$key] ?>">
                <div class="cart d-flex align-items-center justify-content-between px-3">
                    <div class="cart_image">
                        <img src="<?= $pathUpload . $bill['img'] ?>" width="100px" alt="">
                    </div>
                    <div class="cart_title">
                        <h6><?= $bill['name'] ?></h6>
                    </div>
                    <div class="cart_proinfor">
                        <p>Phân loại: <?= $bill['color'] ?></p>
                        <p>Cấu hình: <?= $bill['memory'] ?></p>
                    </div>
                    <div class="cart_price">
                        <p><?= number_format($bill['price']) ?> vnđ</p>
                    </div>
                    <div class="cart_count">
                        <p><?= $bill['count'] ?></p>
                    </div>
                    <div class="cart_total">
                        <p><?= number_format($bill['total']) ?> vnđ</p>
                    </div>
                </div>
                <hr>
            <?php endforeach ?>
        </div>
        <!-- PTTT -->
        <div id="pttt" class="vorcher d-none position-fixed">
            <div class="voucher_bong d-flex justify-content-center align-items-center">
                <div class="voucher_content border p-4">
                    <div class="header_voucher d-flex justify-content-between mb-3 align-items-center">
                        <span class="fs-5">Phương thức thanh toán</span>
                    </div>
                    <!-- list voucher -->
                    <div class="voucher_content-main d-flex py-1 px-4 justify-content-between align-items-center border my-3">
                        <div class="voucher_content-time">
                            <label for="pttt1" class="fs-5">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="voucher_content-btn">
                            <input type="radio" value="Thanh toán khi nhận hàng" name="pttt" checked id="pttt1">
                        </div>
                    </div>
                    <div class="voucher_content-main d-flex py-1 px-4 justify-content-between align-items-center border my-3">
                        <div class="voucher_content-time">
                            <label for="pttt2" class="fs-5">Chuyển khoản ngân hàng</label>
                        </div>
                        <div class="voucher_content-btn">
                            <input type="radio" value="Chuyển khoản ngân hàng" name="pttt" id="pttt2">
                        </div>
                    </div>
                    <div class="voucher_content-main d-flex py-1 px-4 justify-content-between align-items-center border my-3">
                        <div class="voucher_content-time">
                            <label for="pttt2" class="fs-5">Ví ShopH Pay</label>
                        </div>
                        <div class="voucher_content-btn">
                            <input type="radio" value="Ví ShopH Pay" name="pttt" id="pttt2">
                        </div>
                    </div>
                    <div class="voucher_content-main d-flex py-1 px-4 justify-content-between align-items-center border my-3">
                        <div class="voucher_content-time">
                            <label for="pttt4" class="fs-5">Thẻ tín dụng</label>
                        </div>
                        <div class="voucher_content-btn">
                            <input type="radio" value="Thẻ tín dụng" name="pttt" id="pttt4">
                        </div>
                    </div>
                    <div class="footer_voucher d-flex justify-content-end align-items-center">
                        <input type="button" id="pttt_back" value="Chọn" class="px-5 btn btn-outline-danger">
                    </div>
                </div>
            </div>
        </div>
        <div class="cart_footer mt-5 px-4 pb-4">
            <div class="cart_voucher d-flex align-items-center justify-content-between mb-3">
                <div class="pttt_cart d-flex align-items-center">
                    <div class="pttt_cart-title">
                        <span>Phương thức thanh toán</span>
                        <div class="d-flex">
                            <p>-> </p>
                            <p class="prinPttt"> Thanh toán khi nhận hàng</p>
                        </div>
                    </div>
                    <div class="pttt_cart_btn ms-4 pt-3">
                        <input type="button" id="pttt_click" value="Thay đổi">
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <span class="me-5">Shop Voucher</span>
                    <input type="button" id="click_voucher" value="Chọn hoặc nhập mã">
                </div>
            </div>
            <hr>
            <div class="cart_total d-flex justify-content-end">
                <table>
                    <tr>
                        <td>Tổng tiền hàng:</td>
                        <td class="p-2 ps-5 d-flex justify-content-end"> <span class="total_pro"><?= number_format($totalAll) ?></span> vnđ </td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển: </td>
                        <td class="p-2 ps-5 d-flex justify-content-end"> <span class="total_ship"><?= number_format("100000") ?></span> vnđ</td>
                    </tr>
                    <tr>
                        <td>Voucher: </td>
                        <td class="p-2 ps-5 d-flex justify-content-end">- <span class="voucher_down">0</span> vnđ</td>
                    </tr>
                    <tr>
                        <td>Tổng thanh toán:</td>
                        <td class="p-2 ps-5 d-flex justify-content-end"> <input name="total_bill" class="text-end" id="total_cart" value="">vnđ</td>
                    </tr>
                </table>
            </div>
            <hr>
            <input type="hidden" name="" value="0" id="priceVoucher">
            <div class="cart_btn d-flex justify-content-end">
                <button type="submit" name="btn_muahang" class="btn btn-outline-danger">Đặt hàng</button>
            </div>
        </div>
        <div id="vorcher" class="vorcher d-none position-fixed">
            <div class="voucher_bong d-flex justify-content-center align-items-center">
                <div class="voucher_content border p-4">
                    <div class="header_voucher d-flex justify-content-between mb-3 align-items-center">
                        <span>Chọn Voucher</span>
                        <a href="#">Hỗ trợ <i class="fa-solid fa-headphones-simple"></i></a>
                    </div>
                    <div style="flex-wrap: nowrap;" class="input-group mb-3">
                        <input type="text" class="form-control" id="text-voucher" placeholder="Nhập mã voucher" aria-label="Nhập mã voucher" aria-describedby="button-addon2">
                        <button style="width:200px" class="btn btn-outline-secondary" type="button" id="btn-queryvoucher">Tìm Voucher</button>
                    </div>
                    <!-- list voucher -->
                    <div id="listVou" class="div-list-voucher"></div>
                    <div class="footer_voucher d-flex justify-content-end align-items-center">
                        <input type="button" id="voucher_back" value="Xác Nhận" class="px-5 btn btn-outline-danger">
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<script>
    $(document).ready(function() {
        $("#btn-queryvoucher").on('click', function() {
            text = $("#text-voucher").val();
            $.ajax({
                url: './ajax/ajaxVoucher.php',
                method: 'POST',
                data: {
                    queryVoucher: true,
                    text: text,
                },
                success: function(data) {
                    $("#listVou").html(data);
                }
            });
        });
        $("#voucher_back").on('click', function() {
            price = $("#priceVoucher").val();
            $(".voucher_down").html(price.toLocaleString());
            total = $("#total_cart").val();
            total = total.replace(/\./g, '');  
            carPrice = parseInt(total) - parseInt(price);
            $("#total_cart").val(carPrice.toLocaleString());
        });


        $(document).on('click', '.voucherRadio', function() {
            id = $(this).val();
            $.ajax({
                url: './ajax/ajaxVoucher.php',
                method: 'POST',
                data: {
                    appVoucher: true,
                    id: id,
                },
                success: function(price) {
                    $("#priceVoucher").val(price);
                },
            });
        });
    });



    function blockIn(idForm, block, none) {
        let locationShip = document.querySelector(idForm);
        document.getElementById(block).onclick = function() {
            locationShip.classList.remove("d-none");
            locationShip.classList.add("d-block");
        }

        document.getElementById(none).onclick = function() {
            locationShip.classList.remove("d-block");
            locationShip.classList.add("d-none");
        }
    }

    // load textinput
    function loadText(input, text) {
        input.addEventListener('input', function() {
            text.innerText = input.value;
        })
    }
    blockIn("#location_ship", "click_location", "location_back");
    blockIn("#vorcher", "click_voucher", "voucher_back");
    blockIn("#pttt", "pttt_click", "pttt_back");

    let prinPttt = document.querySelector(".prinPttt");
    let inputPttt = document.getElementsByName("pttt");
    for (let i = 0; i < inputPttt.length; i++) {
        inputPttt[i].addEventListener('change', function() {
            if (inputPttt[i].checked) {
                prinPttt.innerHTML = inputPttt[i].value;
            }
        });
    }

    let totalCart = document.querySelector("#total_cart");
    let totalPro = document.querySelector(".total_pro").innerText;
    totalPro = totalPro.replace(/,/g, '');
    let priceShip = document.querySelector(".total_ship").innerText;
    priceShip = priceShip.replace(/,/g, '');
    let tongBill = parseFloat(totalPro) + parseFloat(priceShip);
    totalCart.value = tongBill.toLocaleString();

    // Thông tin
    let fullname = document.getElementById('fullname');
    let tel = document.getElementById('tel');
    let address = document.getElementById('address');
    let textFullname = document.querySelector('.textFullname');
    let textAddress = document.querySelector('.textAddress');
    let textTel = document.querySelector('.textTel');
    loadText(fullname, textFullname);
    loadText(address, textAddress);
    loadText(tel, textTel);
</script>