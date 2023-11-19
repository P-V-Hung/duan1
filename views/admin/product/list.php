<div class="container content-admin">
    <h2 class="py-4 title-admin">Danh sách sản phẩm</h2>
    <div class="box-product-right-content new-product">
        <?php
        foreach ($listProducts as $pro) :
            foreach ($listPP as $pp) :
                if ($pro['id'] == $pp['pp_proid']) :
        ?>
                    <div class="card" style="width: 17rem">
                        <img src="<?=$pathUpload.$pro['pro_img']?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
                            <div class="card-views">
                                <p class="card-text ">Giá: <?= $pp['minprice'] . " -> " . $pp['maxprice'] . "(vnđ)" ?></p>
                                <span>Lượt mua : <?= $pp['total_buys'] ?></span>
                            </div>
                            <div class="card-views d-flex justify-content-between">
                                <span>Trạng thái: <?= $pro['pro_status'] == 0 ? "Đang bán" : "<span style='color:red;font-weight:500'>Ngừng bán</span>" ?></span>
                                <span>Tồn kho: <?= $pp['total_count'] ?></span>
                            </div>
                            <div class="card-thaotac mt-2 d-flex justify-content-center align-items-center">
                                <a href="<?= $adminUrl . "product/chitiet&id=" . $pro['id'] ?>" class="btn btn-outline-primary">Chi tiết</a>
                                <a href="<?= $adminUrl . "product/update&id=" . $pro['id'] ?>" class="btn btn-outline-primary mx-2">Sửa</a>
                                <a href="<?= $adminUrl . "product/delete&id=" . $pro['id'] ?>" class="btn btn-outline-primary">Xóa</a>
                            </div>
                        </div>
                    </div>
        <?php
                endif;
            endforeach;
        endforeach;
        ?>

    </div>
</div>