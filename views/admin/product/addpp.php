<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Thêm biến thể sản phẩm</h2>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" style="width: 500px;margin: auto;">
            <div class="mb-3">
                <label for="pro_name" class="form-label">Tên sản phẩm: </label>
                <input class="form-control" type="text" value="<?=$pro['pro_name']?>"  aria-label="readonly input example" readonly>
            </div>
            <div class="mb-3">
                <label for="pro_name" class="form-label">Ảnh sản phẩm: </label><br>
                <div class="mb-img d-flex justify-content-center ">
                    <img src="<?=$pathUpload.$pro['pro_img']?>" style="max-width: 150px;" alt="">
                </div>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá: </label>
                <input type="text"  class="form-control" name="pp_price" id="price">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Phân loại: </label>
                <input type="text" class="form-control" name="pp_color" id="color">
            </div>
            <div class="mb-3">
                <label for="memory" class="form-label">Cấu hình: </label>
                <input type="text" class="form-control" name="pp_memory" id="memory">
            </div>
            <div class="mb-3">
                <label for="count" class="form-label">Số lượng: </label>
                <input type="number" min="0" class="form-control" name="pp_count" id="count">
            </div>
            <button type="submit" name="btn_add-pp" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>