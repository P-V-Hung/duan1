<div class="container content-admin">
    <h2 class="py-4 title-admin">Danh sách thuộc tính sản phẩm</h2>
    <form action="" method="post">
        <table class="table-hung">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên thuộc tính</th>
                <th>
                    <div class="input-group">
                        <input type="text" class="form-control" name="p_name" placeholder="Tên thuộc tính" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" name="btn-add-p" id="button-addon2">Thêm</button>
                    </div>
                </th>
            </tr>
            <?php foreach ($listProper as $proper) : ?>
                <tr>
                    <td><input type="checkbox" name="checkProper<?= $proper['id'] ?>" value="<?= $proper['id'] ?>" class="checkbtn" id=""></td>
                    <td><?= $proper['id'] ?></td>
                    <td><?= $proper['p_name'] ?></td>
                    <td>
                        <a href="<?=$adminUrl."product/property/update&id=".$proper['id']?>">Sửa</a>
                        <a href="<?=$adminUrl."product/property/list&deleteId=".$proper['id']?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="btn_property d-flex justify-content-center mt-3">
            <input type="button" id="btnClick" class="btn btn-outline-dark" value="Chọn tất cả">
            <input type="button" id="btnNo" class="btn btn-outline-dark mx-2" value="Bỏ chọn tất cả">
            <input type="submit" name="btn-deletes-p" class="btn btn-outline-dark" value="Xóa tất cả ô đã chọn">
        </div>
    </form>
</div>
<script>
    let listCheck = document.querySelectorAll('.checkbtn');
    document.getElementById('btnClick').onclick = function(){
        for(let i =0; i< listCheck.length; i++){
            listCheck[i].checked = true;
        }
    }
    document.getElementById('btnNo').onclick = function(){
        for(let i =0; i< listCheck.length; i++){
            listCheck[i].checked = false;
        }
    }
</script>