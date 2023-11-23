<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Sửa thuộc tính sản phẩm</h2>
    <div class="listdanhmuc d-flex justify-content-center align-items-center p2-5">
        <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="p_name" value="<?=$properties['p_name']?>" placeholder="Tên thuộc tính" aria-label="Recipient's username" aria-describedby="btn_update-cate">
                <button class="btn btn-outline-secondary" type="submit" name="btn_update-proper" id="btn_add-cate">Sửa thuộc tính</button>
            </div>
            <a href="<?=$adminUrl."product/property/list"?>" class="btn btn-outline-dark">Danh sách</a>
        </form>
    </div>
</div>