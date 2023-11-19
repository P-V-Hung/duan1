<div class="container content-admin">
    <h2 class="py-4 title-admin">Biến thể sản phẩm "<?= $pro['pro_name'] ?>"</h2>
    <div class="box-product-right-content new-product">
        <?php
        if (!empty($proPP)) {
            foreach ($proPP as $pp) :
        ?>
                <div class="card" style="width: 17rem">
                    <img src="<?= $pathUpload . $pp['pp_img'] ?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
                        <p class="card-text">Giá: <?= $pp['pp_price'] ?></p>
                        <div class="card-views d-flex justify-content-between">
                            <span>Lượt mua : <?= $pp['pp_buys'] ?></span>
                            <span>Tồn kho : <?= $pp['pp_count'] ?></span>
                        </div>
                        <div class="card-views d-flex justify-content-between">
                            <span>Phân loại: <?= $pp['pp_color'] ?></span>
                            <span>Cấu hình: <?= $pp['pp_memory'] ?></span>
                        </div>
                        <div class="card-thaotac mt-2 d-flex justify-content-center align-items-center">
                            <a href="<?= $adminUrl . "product/update&idpp=" . $pp['id'] ?>" class="btn btn-outline-primary me-3">Cập nhật</a>
                            <a href="<?= $adminUrl . "product/delete&idpp=" . $pp['id']."&idpro=".$pro['id'] ?>" class="btn btn-outline-primary">Xóa</a>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
        }
        ?>
        <div class="card_add">
            <a href="<?= $adminUrl . "product/addpp&id=" . $pro['id'] ?>">
                <div class="card-botron">
                    <p>Thêm biến thể</p>
                    <span>
                        +
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>