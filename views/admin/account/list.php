<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách tài khoản</h2>
    <form action="" method="post">
        <table class="table-hung">
            <tr class="table-hung-th">
                <th></th>
                <th>STT</th>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            <?php $i=1; foreach ($listAccount as $acc) : ?>
                <tr>
                    <td><input type="checkbox" name="checkVou<?= $acc['id'] ?>" value="<?= $acc['id'] ?>" class="checkbtn" id=""></td>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $acc['id'] ?></td>
                    <td><?php echo $acc['u_username'] ?></td>
                    <td><?php echo $acc['u_email'] ?></td>
                    <td><?php echo $acc['u_role'] ?></td>
                    <td><?php echo $acc['u_status'] ?></td>
                    <td>
                        <a href="<?=$adminUrl."account/update&id=".$acc['id']?>">Sửa</a> | 
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')" href="<?= $adminUrl . "account/delete&id=" . $acc['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="btn_property d-flex justify-content-center mt-3">
            <input type="button" id="btnClick" class="btn btn-outline-dark" value="Chọn tất cả">
            <input type="button" id="btnNo" class="btn btn-outline-dark mx-2" value="Bỏ chọn tất cả">
            <input type="submit" name="btn-deletes-v" class="btn btn-outline-dark" value="Xóa tất cả ô đã chọn">
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