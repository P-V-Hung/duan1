<div class="right-sitebar container-xxl pb-5">
    <div class="title-admin">
        <a class="float-start ms-3 fs-3 text-dark py-4 opacity-75" href="<?=$adminUrl."account/list"?>"><i class="fa-solid fa-arrow-left"></i></a>
        <h2 class="py-4">Thông tin tài khoản</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <img src="<?php
                    if((!isset($account['u_img']))||($account['u_img']=="")) echo $pathUpload.'user.jpg'; 
                    else echo $pathUpload.$account['u_img'];
                ?>" alt="" class="rounded-circle mt-4 width:100%;">
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Cập nhật thông tin tài khoản: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_username'] ?>" require
                                name="u_username" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_fullname'] ?>" require
                                name="u_fullname" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_email'] ?>" require
                                name="u_email" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_tel'] ?>" require
                                name="u_tel" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_address'] ?>" require
                                name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò</span>
                            <input readonly type="text" class="form-control" 
                            value="<?php
                                if($account['u_role']==1) echo "Quản trị viên";
                                else echo "Khách hàng";
                            ?>"
                            require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Trạng thái</span>
                            <input readonly type="text" class="form-control" 
                            value="<?php
                                if($account['u_status']==1) echo "Đang hoạt động";
                                else echo "Đã khóa" ;
                            ?>"
                            require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Ngày tạo</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['u_create'] ?>" require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <a class="btn btn-info mb-3" href="<?= $adminUrl . "account/update&id=".$account['id'] ?>">Sửa thông tin tài khoản</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa tài khoản này ?')" class="btn btn-danger mb-3" href="<?= $adminUrl . "account/delete&id=".$account['id'] ?>">Xóa tài khoản</a>
                        <div class="input-group mb-3">
                            <!-- <input type="submit" class="btn btn-success" name="btn_update-acc" value="Cập nhật">
                            <a onclick="return confirm('Bạn chắc chắn muốn quay lại trang danh sách tài khoản không ?')"
                                style="z-index: 1000;" class="btn p-0" href="<?= $adminUrl . "account/list" ?>"><span
                                    class="btn btn-secondary">Hủy</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- Đơn hàng liên quan -->
    <div class="mt-5">
        <hr class="border border-dark border-2 opacity-50">
        <h4 class="modal-title">Đơn hàng liên quan</h4>
        <table style="width:100%;" class="table-hung">
            <tr>
                <th>
                    <p>STT</p>
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
                <?php $i=1; foreach ($echoBill as $bill) {
                            $linkBill = $adminUrl."billinfo&id=".$bill['id'];
                            echo "<tr>
                                <td>". $i++ ."</td>
                                <td>". $bill['bill_count'] ."</td>
                                <td>". number_format($bill['bill_price'])." </td>
                                <td>". date('d-m-Y',strtotime($bill['bill_create'])) ."</td>
                                <td>". $bill['echo_status'] ."</td>";
                            echo <<<HTML
                                    <td><a onclick="return confirm('Bạn có muốn chuyển sang trang quản lý đơn hàng ?')"  href="$linkBill"><i>chi tiết</i></a></td>
                                HTML;
                            echo "</tr>";
                        
                } ?>
            </tbody>
        </table>
    </div>
    <!-- Bình luận đã gửi -->
    <div class="mt-5">
        <hr class="border border-dark border-2 opacity-50">
        <h4 class="modal-title">Bình luận đã gửi</h4>
        <table style="width:100%;" class="table-hung">
            <tr class="table-hung-th">
                <th>STT</th>
                <th>Nội dung</th>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Ngày bình luận</th>
                <th>Đánh giá</th>
                <th>Trạng thái</th>
            </tr>
            <tbody id="body-listComment">
                <?php $i = 1;
                foreach ($echoListComment as $com) : ?>
                    <tr class="trListComment">
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $com['com_content'] ?></td>
                        <td><img src="<?php if(isset($com['com_img'])) echo $pathUpload.$com['com_img'] ?>" alt="No Photo" style="height: 60px; max-width: 50px"></td>
                        <td>
                        <?php 
                            if($com['com_proid'] == "Sản phẩm đã bị xóa")
                            {
                                echo $com['com_proid'];
                            }else{
                                echo "<a style='text-decoration:none;color:black;' href='".$adminUrl.'product/update&id='.$com['com_proid']."'>".$com['pro_name']."</a>";
                            }
                        ?>
                        </td>
                        <td><?php echo date("d-m-Y",strtotime($com['com_date'])) ?></td>
                        <td><?php echo $com['com_reating'] ?></td>
                        <td>
                            <?php
                            if ($com['com_status'] == 1) echo "Đang hiển thị";
                            else if ($com['com_status'] == 2) echo "<span style='color:red;'>Đã ẩn</span>";
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>