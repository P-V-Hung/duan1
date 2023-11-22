<div class="container content-admin">
    <h2 class="py-4 title-admin">Danh sách sản phẩm bán chạy</h2>
    <div class="container mb-5">
        <h3>Sản phẩm bán chạy</h3>
        <div class="listSp d-flex flex-wrap">
            <?php foreach ($listHotProduct as $pro) : ?>
                <div class="card" style="width: 15rem">
                    <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
                    <div class="card-body row px-4 justify-content-center align-items-center">
                        <h5 class="card-title text-center"><?= $pro['pro_name'] ?></h5>
                        <a href="<?= $adminUrl . "product/hotproduct/delete&id=" . $pro['idhot'] ?>" class="btn btn-outline-primary">Xóa khỏi ds bán chạy</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <hr>
    <div class="container mb-5">
        <h3>Danh sách sản phẩm</h3>
        <div class="listSp d-flex flex-wrap">
            <?php foreach ($listProducts as $pro) : ?>
                <div class="card" style="width: 15rem">
                    <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
                    <div class="card-body row px-4 justify-content-center align-items-center">
                        <h5 class="card-title text-center"><?= $pro['pro_name'] ?></h5>
                        <a href="<?= $adminUrl . "product/hotproduct/add&idpro=" . $pro['id'] ?>" class="btn btn-outline-primary">Thêm vào ds bán chạy</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>