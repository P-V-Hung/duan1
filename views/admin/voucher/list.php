<div class="container content-admin">
  <h2 class="py-4 title-admin">Danh sách mã giảm giá</h2>
  
  <div class="listVoucher">
      <table>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Mã giảm giá</th>
            <th>Mức ưu đãi</th>
            <th>Số lượng</th>
            <th>Đã sử dụng</th>
            <th>Ngày tạo</th>
            <th>Ngày hết hạn</th>
            <th>Thao tác</th>
        </tr>
        <?php $i = 1; foreach($listVouchers as $vou): ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $vou['id'] ?></td>
            <td><?php echo $vou['v_name'] ?></td>
            <td><?php echo $vou['v_price'] ?></td>
            <td><?php echo $vou['v_count'] ?></td>
            <td><?php echo $vou['v_used'] ?></td>
            <td><?php echo $vou['v_create'] ?></td>
            <td><?php echo $vou['v_arrtive'] ?></td>
            <td><a href="<?= $adminUrl . "voucher/update&id=" . $vou['id'] ?>">Sửa</a> | <a onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')" href="<?= $adminUrl . "voucher/delete&id=" . $vou['id'] ?>">Xóa</a></td>
        </tr>
        <?php endforeach ?>
      </table>
    
  </div>
</div>