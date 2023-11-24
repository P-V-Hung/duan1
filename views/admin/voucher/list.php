<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách mã giảm giá</h2>
    <form action="" method="post">
        <table class="table-hung">
            <tr class="table-hung-th">
                <th></th>
                <th>STT</th>
                <th>Mã giảm giá</th>
                <th>Mức ưu đãi (VNĐ)</th>
                <th>Số lượng</th>
                <th>Đã sử dụng</th>
                <th>Ngày tạo</th>
                <th>Ngày hết hạn</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            <?php $i=1; foreach ($listVouchers as $vou) : ?>
                <tr>
                  <td><input type="checkbox" name="checkVou<?= $vou['id'] ?>" value="<?= $vou['id'] ?>" class="checkbtn" id=""></td>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $vou['v_name'] ?></td>
                  <td><?php echo number_format($vou['v_price']) ?></td>
                  <td><?php echo $vou['v_count'] ?></td>
                  <td><?php echo $vou['v_used'] ?></td>
                  <td><?php echo $vou['v_create'] ?></td>
                  <td><?php echo $vou['v_arrtive'] ?></td>
                  <td><?php statusVou($vou['v_count'],$vou['v_used'],$vou["v_arrtive"]) ?></td>
                  <td><a onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')" href="<?= $adminUrl . "voucher/delete&id=" . $vou['id'] ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="btn_property d-flex justify-content-center mt-3 mb-4">
            <input type="button" id="btnClick" class="btn btn-outline-dark" value="Chọn tất cả">
            <input type="button" id="btnNo" class="btn btn-outline-dark mx-2" value="Bỏ chọn tất cả">
            <input type="submit" name="btn-deletes-v" class="btn btn-outline-dark" value="Xóa tất cả ô đã chọn" onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')">
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