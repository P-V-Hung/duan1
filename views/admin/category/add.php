<div class="container content-admin">
    <h2 class="py-4 title-admin">Thêm danh mục</h2>
    <div class="listdanhmuc d-flex justify-content-center align-items-center p2-5">
        <form action="" method="post">
            <label for="">Nằm trong danh mục: </label>
            <select class="form-select mb-3" aria-label="Default select example" name="cat_idparent" id="">
                <option value="0">Danh mục gốc</option>
                <?php foreach($listCategory as $cat): ?>
                <option value="<?=$cat['id']?>"><?=$cat['cat_name']?></option>
                <?php endforeach ?> 
            </select>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cat-name" placeholder="Nhập tên danh mục" aria-label="Recipient's username" aria-describedby="btn_update-cate">
                <button class="btn btn-outline-secondary" type="submit" name="btn_add-cat" id="btn_add-cate">Thêm danh mục</button>
            </div>
        </form>
    </div>
</div>