<?php
require_once "../config/pdo.php";
require_once "../config/function.php";
require_once '../models/VoucherModel.php';
if (isset($_POST['queryVoucher'])) {
    $text = strtoupper($_POST['text']);
    $voucher = VoucherFind(['*'], "v_name = '$text'");
    if (empty($voucher)) {
        logWarning('Voucher không tồn tại');
    } else {
        $count = 0;
        if (($voucher['v_count'] - $voucher['v_used']) != 0) {
            $count = $voucher['v_count'] - $voucher['v_used'];
        }
?>
        <div class="voucher_content-main d-flex py-2 px-4 justify-content-between align-items-center border my-4">
            <div class="img d-flex justify-content-center align-items-center">Voucher</div>
            <div class="title">
                Giảm: <span class="priceVoucher"><?= number_format($voucher['v_price']) ?></span>
                <br>
                <span class="free">
                    #<?= $voucher['v_name'] ?>
                </span>
                <br>
                <?= $count == 0 ? '<span style="color:blue">Hết hàng</span>' : "Số lượng còn lại: ".$count ?>
            </div>
            <div class="voucher_content-time">
                <p>Từ: <?= $voucher['v_create'] ?></p>
                <p>Đến: <?= $voucher['v_arrtive'] ?></p>
            </div>
            <div class="voucher_content-btn">
                <?php
                if($voucher['v_arrtive'] < date('Y-m-d')){
                    echo "Hết hạn";
                }
                else if($count == 0) {
                    echo "Hết hàng";
                } else {
                ?>
                    <input type="radio" name="voucher" class="voucherRadio" value="<?= $voucher['id'] ?>" id="">
                <?php
                }
                ?>
            </div>
        </div>
<?php
    }
}


if (isset($_POST['appVoucher'])) {
    $voucher = VoucherFind(['*'], "id = " . $_POST['id']);
    echo $voucher['v_price'];
}
?>