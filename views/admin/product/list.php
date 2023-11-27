<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách sản phẩm</h2>
    <form class="input-group mb-3" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Nhập tên sản phẩm muốn tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" name="btn-all" id="button-addon2">Tất cả sản phẩm</button>
        <button class="btn btn-outline-secondary" type="submit" name="btn-search" id="button-addon2">Tìm kiếm</button>
    </form>
    <?= 
        isset($keyword) ? "<p style='font-size: 1.1rem;'>Kết quả tìm kiếm của: <span style='color:red;font-weight: 500;'>$keyword</span></p>" : '';
    ?>
    <div class="box-product-right-content new-product">
        <?php
        foreach ($listProducts as $pro) :
            foreach ($listPP as $pp) :
                if ($pro['id'] == $pp['pp_proid']) :
        ?>
                    <div class="card" style="width: 16rem">
                        <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
                            <div class="card-views">
                                <p class="card-text ">Giá: <?= number_format($pp['minprice']) . " -> " . number_format($pp['maxprice']) . "(vnđ)" ?></p>
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