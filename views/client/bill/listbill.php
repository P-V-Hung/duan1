<?php
if (isset($_COOKIE['addbill'])) {
    logSuccess("Chờ xác nhận đơn hàng");
}
    if(empty($echoBill)){
        echo "<h3 class='pt-5' style='text-align: center;'>Không có đơn hàng nào</h3>";
    }else{
?>
<main class="container-xxl mt-5">
    <table class="table-hung">
        <tr>
            <th>
                <p>Tên người nhận</p>
            </th>
            <th style="width: 120px;">
                <p>Địa chỉ</p>
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
                <p>PTTT</p>
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
            <th>
            <i class="fa-solid fa-question"></i>
            </th>
        </tr>
        <tbody>
            <?php foreach ($echoBill as $bill) : ?>
                <tr>
                    <td>
                        <p><?= $bill['bill_fullname'] ?></p>
                    </td>
                    <td><?= $bill['bill_address'] ?></td>
                    <td><?= $bill['bill_tel'] ?></td>
                    <td><?= $bill['bill_count'] ?></td>
                    <td><?= number_format($bill['bill_price']) ?></td>
                    <td><?= $bill['bill_pttt'] ?></td>
                    <td><?= date("d-m-Y",strtotime($bill['bill_create'])) ?></td>
                    <td><?= $bill['echo_status'] ?></td>
                    <td><a href="<?= $clientUrl . "billinfo&id=" . $bill['id'] ?>"><i>chi tiết</i></a></td>
                    <td>
                        <?php 
                            if($bill['bill_status']==5){
                                echo "<a href=''>hỗ trợ</a>";
                            }else if($bill['bill_status']==6){
                                echo "<a>Đã hủy</a>";
                            }else{
                                echo "<a href='".$clientUrl."bill/delete&id=".$bill['id']."'>hủy</a>";
                            }
                        ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</main>
<?php
    }
?>