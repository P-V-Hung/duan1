<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Thêm tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <div>
                    <label for="formFile"><img id="img-add-acc" alt="" class="width:100%;"></label>
                </div>
                <div class="my-3">
                    <input class="form-control" type="file" name="u_img" onchange="chooseFile(this,'img-add-acc')" id="formFile">
                </div>
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Thông tin tài khoản: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập</span>
                            <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" require name="u_username" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input type="text" class="form-control" placeholder="Nhập tên người dùng" require name="u_fullname" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input type="text" class="form-control" placeholder="Nhập email liên hệ" require name="u_email" id="basic-url" aria-describedby="basic-addon3" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại liên hệ" require name="u_tel" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Mật khẩu</span>
                            <input type="password" class="form-control" min="0" step="5" placeholder="Nhập mật khẩu đăng nhập" require name="u_password" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input type="text" class="form-control" min="0" step="5" placeholder="Nhập địa chỉ người dùng" require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò</span>
                            <select name="u_role" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <option value="0" hidden>Chọn</option>
                                <option value="1"><?php echo "Quản trị viên" ?></option>
                                <option value="2"><?php echo "Khách hàng" ?></option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-success form-control" name="btn_add-acc" value="Thêm tài khoản">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>