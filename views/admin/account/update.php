<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Cập nhật tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <div>
                    <label for="formFile"><img src="<?=$pathUpload.$account['u_img']?>" id="img-add-acc" alt="" class="width:100%;"></label>
                </div>
                <div class="my-3">
                    <input class="form-control" type="file" name="u_img" onchange="chooseFile(this,'img-add-acc')" id="formFile">
                </div>
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Cập nhật thông tin tài khoản: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập</span>
                            <input type="text" class="form-control" value="<?php echo $account['u_username'] ?>" require name="u_username" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input type="text" class="form-control" value="<?php echo $account['u_fullname'] ?>" require name="u_fullname" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input type="text" class="form-control" value="<?php echo $account['u_email'] ?>" require name="u_email" id="basic-url" aria-describedby="basic-addon3" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input type="text" class="form-control" value="<?php echo $account['u_tel'] ?>" require name="u_tel" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Mật khẩu</span>
                            <input type="password" class="form-control" value="<?php echo $account['u_password'] ?>" require name="u_password" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input type="text" class="form-control" value="<?php echo $account['u_address'] ?>" require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò</span>
                            <select name="u_role" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <option value="1" <?php if($account['u_role']==1) echo "selected";?>><?php echo "Quản trị viên" ?></option>
                                <option value="2" <?php if($account['u_role']==2) echo "selected";?>><?php echo "Khách hàng" ?></option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Trạng thái</span>
                            <select name="u_status" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <?php
                                    if($account['u_status']== 1) {
                                        echo "
                                        <option value='1' selected>Hoạt động</option>
                                        <option value='2'>Khóa</option>";
                                    }else if($account['u_status']== 2) {
                                        echo "
                                        <option value='1'>Mở khóa</option>
                                        <option value='2' selected >Đã khóa</option>";
                                    }else{
                                        echo "
                                        <option value='0' selected hidden>Chọn</option>
                                        <option value='1'>Hoạt động</option>
                                        <option value='2'>Khóa</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" name="btn_update-acc" value="Cập nhật">
                            <a onclick="return confirm('Bạn chắc chắn muốn quay lại trang danh sách tài khoản không ?')" style="z-index: 1000;" class="btn p-0" href="<?= $adminUrl . "account/list" ?>"><span class="btn btn-secondary">Hủy</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>