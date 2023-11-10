<main class="container-xxl mt-5">
    <form action="" method="post">
        <div class="location border p-3">
            <div class="title_ship mb-1">
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</p>
            </div>
            <div class="location_ship d-flex">
                <b>Phạm Văn Hùng (+0333026322)</b>
                <p class="ms-5">Thanh Lâm-An Thịnh-Lương Tài-Bắc Ninh</p>
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
                        <input class="border my-2 py-2" type="text" value="Phạm Văn Hùng" name="fullname" placeholder="Họ và tên người nhận" id=""><br>
                        <input class="border my-2 py-2" type="text" value="Số 2a, Thanh Lâm-An Thịnh-Lương Tài-Bắc Ninh" name="tel" placeholder="Số điện thoại" id=""><br>
                        <input class="border my-2 py-2" type="text" value="0333026322" name="address" placeholder="Địa chỉ" id=""><br>
                    </div>
                    <div class="footer_voucher d-flex justify-content-end align-items-center">
                        <input type="button" id="location_back" value="Xác nhận" class="px-5 btn btn-outline-danger">
                    </div>
                </div>
            </div>
        </div>
        <!-- Danh sách sản phẩm -->
        <div class="listcart border mt-4 pt-3">
            <div class="cart d-flex align-items-center justify-content-between ps-2">
                <div class="cart_sp ms-4">
                    <p>Sản phẩm</p>
                </div>
                <div class="ps-5 ms-2">Tên sản phẩm</div>
                <div></div>
                <div class="ps-3">Cấu hình</div>
                <div></div>
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
            <div class="cart d-flex align-items-center justify-content-between px-3">
                <div class="cart_image">
                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ln7cadeymy8o51" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6>Điện thoại IPhone 14Promax</h6>
                </div>
                <div class="cart_proinfor">
                    <p>Màu : Đỏ</p>
                    <p>Cấu hình: 64GB</p>
                </div>
                <div class="cart_price">
                    <p>55.000 đ</p>
                </div>
                <div class="cart_count">
                    <p>2</p>
                </div>
                <div class="cart_total">
                    <p>110.000 đ</p>
                </div>
            </div>
            <hr>
            <div class="cart d-flex align-items-center justify-content-between px-3">
                <div class="cart_image">
                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ln7cadeymy8o51" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6>Điện thoại IPhone 14Promax</h6>
                </div>
                <div class="cart_proinfor">
                    <p>Màu : Đỏ</p>
                    <p>Cấu hình: 64GB</p>
                </div>
                <div class="cart_price">
                    <p>55.000 đ</p>
                </div>
                <div class="cart_count">
                    <p>2</p>
                </div>
                <div class="cart_total">
                    <p>110.000 đ</p>
                </div>
            </div>
            <hr>
            <div class="cart d-flex align-items-center justify-content-between px-3">
                <div class="cart_image">
                    <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ln7cadeymy8o51" width="100px" alt="">
                </div>
                <div class="cart_title">
                    <h6>Điện thoại IPhone 14Promax</h6>
                </div>
                <div class="cart_proinfor">
                    <p>Màu : Đỏ</p>
                    <p>Cấu hình: 64GB</p>
                </div>
                <div class="cart_price">
                    <p>55.000 đ</p>
                </div>
                <div class="cart_count">
                    <p>2</p>
                </div>
                <div class="cart_total">
                    <p>110.000 đ</p>
                </div>
            </div>
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
        <div class="cart_footer mt-5 px-4 pb-4 position-sticky">
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
                        <td class="p-2 ps-5 d-flex justify-content-end"> <span class="total_pro">2000000</span> vnđ </td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển: </td>
                        <td class="p-2 ps-5 d-flex justify-content-end"> <span class="total_ship">100000</span> vnđ</td>
                    </tr>
                    <tr>
                        <td>Voucher: </td>
                        <td class="p-2 ps-5 d-flex justify-content-end">- <span class="voucher_down">0</span> vnđ</td>
                    </tr>
                    <tr>
                        <td>Tổng thanh toán:</td>
                        <td class="p-2 ps-5 d-flex justify-content-end"> <input name="total_bill" class="text-end" id="total_cart" value="2075000">vnđ</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="cart_btn d-flex justify-content-end">
                <button name="btn_muahang" class="btn btn-outline-danger">Đặt hàng</button>
            </div>
        </div>
    </form>
    <div id="vorcher" class="vorcher d-none position-fixed">
        <div class="voucher_bong d-flex justify-content-center align-items-center">
            <div class="voucher_content border p-4">
                <div class="header_voucher d-flex justify-content-between mb-3 align-items-center">
                    <span>Chọn Voucher</span>
                    <a href="#">Hỗ trợ <i class="fa-solid fa-headphones-simple"></i></a>
                </div>
                <!-- list voucher -->
                <div class="voucher_content-main d-flex py-2 px-4 justify-content-between align-items-center border my-4">
                    <div class="img d-flex justify-content-center align-items-center">Voucher</div>
                    <div class="title">
                        Giảm: 75.000
                        <br>
                        <span class="free">
                            Freeship toàn quốc
                        </span>
                        <br>
                        Số lượng còn lại: 10
                    </div>
                    <div class="voucher_content-time">
                        <p>Từ: 18-10-2004</p>
                        <p>Đến: 28-10-2004</p>
                    </div>
                    <div class="voucher_content-btn">
                        <input type="radio" name="voucher" value="75000" id="">
                    </div>
                </div>
                <div class="voucher_content-main d-flex py-2 px-4 justify-content-between align-items-center border my-4">
                    <div class="img d-flex justify-content-center align-items-center">Voucher</div>
                    <div class="title">
                        Giảm: 25.000
                        <br>
                        <span class="free">
                            Freeship toàn quốc
                        </span>
                        <br>
                        Số lượng còn lại: 10
                    </div>
                    <div class="voucher_content-time">
                        <p>Từ: 18-10-2004</p>
                        <p>Đến: 28-10-2004</p>
                    </div>
                    <div class="voucher_content-btn">
                        <input type="radio" name="voucher" value="25000" id="">
                    </div>
                </div>
                <div class="voucher_content-main d-flex py-2 px-4 justify-content-between align-items-center border my-4">
                    <div class="img d-flex justify-content-center align-items-center">Voucher</div>
                    <div class="title">
                        Giảm: 50.000
                        <br>
                        <span class="free">
                            Freeship toàn quốc
                        </span>
                        <br>
                        Số lượng còn lại: 10
                    </div>
                    <div class="voucher_content-time">
                        <p>Từ: 18-10-2004</p>
                        <p>Đến: 28-10-2004</p>
                    </div>
                    <div class="voucher_content-btn">
                        <input type="radio" name="voucher" value="50000" id="">
                    </div>
                </div>
                <div class="footer_voucher d-flex justify-content-end align-items-center">
                    <input type="button" id="voucher_back" value="Xác Nhận" class="px-5 btn btn-outline-danger">
                </div>
            </div>
        </div>
    </div>
</main>
<script>
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
    let totalPro = document.querySelector(".total_pro");
    let priceShip = document.querySelector(".total_ship");
    let voucherDown = document.querySelector(".voucher_down");
    let voucher = document.getElementsByName("voucher");
    let tongBill = parseFloat(totalPro.innerText) + parseFloat(priceShip.innerText);
    totalCart.value = tongBill;
    for (let i = 0; i < voucher.length; i++) {
        voucher[i].addEventListener('change', function() {
            if (voucher[i].checked) {
                totalCart.value = tongBill - voucher[i].value;
                voucherDown.innerText = voucher[i].value;
            }
        });
    }
</script>