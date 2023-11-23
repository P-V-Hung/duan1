<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Sửa danh mục "<?= $category['cat_name'] ?>"</h2>

    <div class="listdanhmuc d-flex justify-content-center align-items-center p2-5">
        <form action="" method="post" class="form_update_cat">
            <label for="">Nằm trong danh mục: </label> <br>
            <select class="form-select" name="cat_idparent" aria-label="Default select example">
                <option value="0">Danh mục gốc</option>
                <?php foreach ($listCategory as $cat) : ?>
                    <option <?= $cat['id'] == $idParent ? "selected" : "" ?> value="<?= $cat['id']?>"><?= $cat['cat_name']?></option>
                <?php endforeach ?>
            </select>
            <br>
            <label for="btn_update-cate">Tên danh mục</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cat-name" placeholder="Nhập tên danh mục" aria-label="Recipient's username" value="<?= $category['cat_name'] ?>" aria-describedby="btn_update-cate">
                <button class="btn btn-outline-secondary" type="submit" name="btn_update-cat" id="btn_update-cate">Sửa danh mục</button>
            </div>
        </form>
    </div>
    <p class="textDanhMuc text-center mt-4 fs-5 ps-3 pb-3">Danh sách danh mục con của "<?= $category['cat_name'] ?>"</p>

    <p class="textDanhMuc_error text-center mt-4 fs-5 ps-3 pb-3">
        <?= empty($childrenCategory) ? "Danh mục " . $category['cat_name'] . " không có danh mục con" : "" ?>
    </p>
    <div class="listdanhmuc p2-5">

        <?php foreach ($childrenCategory as $cat) : ?>

            <div class="danhmuc-admin border border-dark d-flex justify-content-between align-items-center py-1 px-2">
                <a href="<?= $adminUrl . "category/list&id=" . $cat['id'] ?>" class="fs-5"><i class="fa-solid fa-plus me-3 ms-1"></i><?= $cat['cat_name'] ?></a>
                <div class="danhmuc-thaotac d-flex">
                    <a href="<?= $adminUrl . "category/update&id=" . $cat['id'] ?>" class="me-2">Sửa</a>
                    <a href="<?= $adminUrl . "category/update&id=" . $cat['id'] ?>">Xóa</a>
                </div>
            </div>

        <?php endforeach ?>

    </div>
</div>