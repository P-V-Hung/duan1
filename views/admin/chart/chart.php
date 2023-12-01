<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Thống kê</h2>
    <div class="container-xl p-2">
        <div class="row">
            <div class="col"><?php require_once ("chartCatCat.php"); ?></div>
            <div class="col"><?php require_once ("chartCatPro.php"); ?></div>
        </div>
        <div class="row">
            <div class="col"><?php require_once ("chartBill.php"); ?></div>
            <div class="col"><?php require_once ("chartAccount.php"); ?></div>
        </div>
        <div class="row mb-5">
            <?php require_once ("chartComment.php"); ?>
        </div>
    </div>

</div>