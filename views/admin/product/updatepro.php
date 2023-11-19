<div class="container-xxl">
    <h2 class="py-4 title-admin">Sửa sản phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="collections row mt-5 px-5">
            <div class="col-7 collections-img">
                <div><img src="<?=$pathUpload.$pro['pro_img']?>" alt="" class="width:100%;"></div>
                <div class="my-3">
                    <input class="form-control" type="file" name="img" id="formFile">
                </div>
                <div class="comment">
                    <div class="comment-title">
                        <h5>Mô tả: </h5>
                        <textarea name="pro_desc" id="text-mota" rows="10">
                            <?= $pro['pro_desc'] ?>
                        </textarea>
                    </div>

                </div>
            </div>
            <div class="col-5 collections-product">
                <div class="collections-product-show">
                    <div class="title">
                        <h2>Tiêu đề sản phẩm: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tiêu đề</span>
                            <input type="text" class="form-control" value="<?= $pro['pro_name'] ?>" name="pro_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <p>Danh mục sản phẩm:</p>
                    </div>
                    <div class="cate">
                        <div class="cate-size">
                            <p>Danh mục </p>
                            <div class="cate-checkbox">
                                <?php
                                foreach ($listCategory as $cat) :
                                    $checkbox = '';
                                    if(!empty($proCat)){
                                        foreach ($proCat as $pc) :
                                            $checkbox = $cat['id'] == $pc['pc_idcat'] ? 'checked' : '';
                                            if ($checkbox) break;
                                        endforeach;
                                    }
                                ?>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0"  name="checkCat<?=$cat['id']?>" value="<?=$cat['id']?>" <?= $checkbox ?> type="checkbox" name="<?= $cat['id'] ?>">
                                        </div>
                                        <label class="form-control"><?= $cat['cat_name'] ?></label>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>

                        </div>
                        <div class="input-group mt-3">
                            <label class="input-group-text" for="inputGroupSelect01">Trạng thái</label>
                            <select class="form-select" name="pro_status" id="inputGroupSelect01">
                                <option value="0">Đang bán</option>
                                <option value="1" <?= $pro['pro_status'] == 1 ? 'selected' : '' ?>>Ngừng bán</option>
                            </select>
                        </div>
                        <button class="btn btn-lg btn-dark my-3" name="btn_update-pro">Cập nhật</button>
                    </div>

                    <div class="description border p-3">
                        <h5>Thông số kĩ thuật: </h5>
                        <table class="table table-striped">
                            <?php
                            foreach ($properties as $proper) :
                                $checkbox = '';
                                $value = '';
                                if(!empty($typePro)){
                                    foreach ($typePro as $tp) :
                                        $checkbox = $tp['tp_pid'] == $proper['id'] ? 'checked' : '';
                                        if($checkbox){
                                            $value = $tp['tp_name'];
                                            break;
                                        }
                                    endforeach;
                                }
                            ?>
                                <tr>
                                    <td><input class="form-check-input mt-0" name="checkProperty<?=$proper['id']?>" value="<?=$proper['id']?>" <?=$checkbox?> type="checkbox"></td>
                                    <td><label><?= $proper['p_name'] ?>:</label></td>
                                    <td class="iput_properted">
                                        <input type="text" class="form-control" name="checkValue<?=$proper['id']?>" value="<?=$value?>" id="basic-url" aria-describedby="basic-addon3">
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