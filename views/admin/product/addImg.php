<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Thêm hình ảnh cho sản phẩm "<?= $pro['pro_name'] ?>"</h2>

    <form class="mb-5" method="post" enctype="multipart/form-data">
        <label for="formFile" class="form-label">Chọn ảnh muốn thêm</label>
        <input class="form-control" type="file" name="img" onchange="chooseFile(this,'img')" id="formFile" multiple>
        <img class="border border-dark mt-3" style="max-width: 200px;" src="" id="img" alt=""><br>
        <input class="btn btn-outline-dark mt-3" type="submit" name="btn-add-imgpro" value="Thêm">
    </form>

    <h4>Hình ảnh hiện có</h4>
    <div class="border px-2 pb-2 d-flex flex-wrap list-img-child">
        <?php foreach ($listImg as $img) : ?>
            <div class="img_child border mt-2 position-relative">
                <img src="<?= $pathUpload.$img['img'] ?>" alt="" style="width:240px;height: auto;">
                <a href="<?= $adminUrl . "product/img/delete&idpro=" . $id . "&idimg=" . $img['id'] ?>" class="position-absolute delete-img-child"><i class="fa-solid fa-trash"></i></a>
            </div>
        <?php endforeach ?>
    </div>
</div>