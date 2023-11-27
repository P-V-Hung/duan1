<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách đơn hàng</h2>
    <main class="container-xxl mt-5">
    <table class="table-hung">
        <tr>
            <th>
                <p>Tên người nhận</p>
            </th>
            <th>
                <p>SĐT</p>
            </th>
            <th>
                <p>Số lượng</p>
            </th>
            <th>
                <p>Thành tiền</p>
            </th>
            <th>
                <p>Ngày đặt</p>
            </th>
            <th>
                <p>Trạng thái</p>
            </th>
            <th>
                <p>Thao tác</p>
            </th>
        </tr>
        <tbody>
            <?php foreach ($echoBill as $bill) : ?>
                <tr>
                    <td>
                        <p><?= $bill['bill_fullname'] ?></p>
                        <p>user: <?= $bill['bill_username'] ?></p>
                    </td>
                    <td><?= $bill['bill_tel'] ?></td>
                    <td><?= $bill['bill_count'] ?></td>
                    <td><?= number_format($bill['bill_price']) ?></td>
                    <td><?= date("d-m-Y",strtotime($bill['bill_create'])) ?></td>
                    <td><?= $bill['echo_status'] ?></td>
                    <td><a href="<?= $adminUrl . "billinfo&id=" . $bill['id'] ?>"><i>chi tiết</i></a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</main>
</div>