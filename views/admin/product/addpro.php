<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Thêm sản phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="collections row mt-5 px-5">
            <div class="col-7 collections-img">
                <div>
                    <img id="img-add-pro" alt="" class="width:100%;">
                </div>
                <div class="my-3">
                    <input class="form-control" type="file" name="img" onchange="chooseFile(this,'img-add-pro')" id="formFile">
                </div>
                <div class="comment">
                    <div class="comment-title">
                        <h5>Mô tả: </h5>
                        <textarea name="pro_desc" id="text-mota" class="border" rows="10">

                        </textarea>
                    </div>

                </div>
            </div>
            <div class="col-5 collections-product">
                <div class="collections-product-show">
                    <div class="title">
                        <h2>Thông tin sản phẩm: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tiêu đề</span>
                            <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" require name="pro_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Giá</span>
                            <input type="text" class="form-control" placeholder="Giá sản phẩm" require name="pp_price" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Phân loại</span>
                            <input type="text" class="form-control" placeholder="Màu sắc" require name="pp_color" id="basic-url" aria-describedby="basic-addon3" list="colors">
                            <datalist id="colors">
                                <option value="Đỏ">
                                <option value="Vàng">
                                <option value="Xanh">
                                <option value="Đen">
                                <option value="Trắng">
                            </datalist>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Cấu hình</span>
                            <input type="text" class="form-control" placeholder="Cấu hình" require name="pp_memory" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số lượng</span>
                            <input type="number" class="form-control" min="0" step="5" placeholder="Số lượng hiện có" require name="pp_count" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <p>Danh mục sản phẩm:</p>
                    </div>
                    <div class="cate">
                        <div class="cate-size">
                            <p>Danh mục </p>
                            <div class="cate-checkbox"></div>

                        </div>
                        <div class="input-group mt-3">
                            <label class="input-group-text" for="inputGroupSelect01">Trạng thái</label>
                            <select class="form-select" name="pro_status" id="inputGroupSelect01">
                                <option value="0">Đang bán</option>
                                <option value="1">Ngừng bán</option>
                            </select>
                        </div>
                        <button class="btn btn-lg btn-dark my-3" name="btn_add-pro">Thêm sản phẩm</button>
                    </div>

                    <div class="description border p-3">
                        <h5>Thông số kĩ thuật: </h5>
                        <table class="table table-striped">
                            <?php
                            foreach ($properties as $proper) :
                            ?>
                                <tr>
                                    <td><input class="form-check-input mt-0" name="checkProperty<?= $proper['id'] ?>" value="<?= $proper['id'] ?>" type="checkbox"></td>
                                    <td><label><?= $proper['p_name'] ?>:</label></td>
                                    <td class="iput_properted">
                                        <input type="text" class="form-control" name="checkValue<?= $proper['id'] ?>" id="basic-url" aria-describedby="basic-addon3">
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        function list_cat(iddm = 0) {
            $.ajax({
                url: "./ajax/ajaxCatAdd.php",
                method: "POST",
                data: {
                    selectCat: true,
                    id_parent: iddm
                },
                success: function(data) {
                    $(".cate-checkbox").html(data)
                }
            });
        }
        list_cat();
        $(document).on("click", ".checkCatChild", function() {
            if ($(this).prop("checked")) {
                list_cat($(this).val());
            }
        });
        $(document).on("click", ".checkCatParent", function() {
            
        });
    });
</script>