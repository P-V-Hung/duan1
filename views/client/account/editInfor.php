
<div class="box_editUserInfo box-userInfo">
  <div class="box-userInfo-header">
    <h3>Chỉnh sửa hồ sơ</h3>
    <p>Chỉnh sửa thông tin tài khoản</p>
  </div>
  <div class="box-userInfo-content">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="box-userInfo-content-left">
        <table class="table">
          <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="u_username" value="<?php if(isset($inforUser['u_username'])) echo $inforUser['u_username'] ?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="u_email" value="<?php if(isset($inforUser['u_email'])) echo $inforUser['u_email'] ?>" /></td>
          </tr>
          <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="u_fullname" value="<?php if(isset($inforUser['u_fullname'])) echo $inforUser['u_fullname'] ?>"></td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name="u_tel" value="<?php if(isset($inforUser['u_tel'])) echo $inforUser['u_tel'] ?>"></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="u_address" value="<?php if(isset($inforUser['u_address'])) echo $inforUser['u_address'] ?>"></td>
          </tr>
          <!-- <tr>
            <td>Mật khẩu cũ</td>
            <td class="position-relative"><input type="password" /></td>
          </tr>
          <tr>
            <td>Mật khẩu mới</td>
            <td class="position-relative"><input type="password" /></td>
          </tr>
          <tr>
            <td>Nhập lại mật khẩu mới</td>
            <td class="position-relative"><input type="password" /></td>
          </tr> -->
        </table>
        <button type="submit" name="btn-editInfor" class="btn btn-success">Lưu thông tin</button>
        <a href="<?=$clientUrl."userInfor"?>" class="btn"><button type="button" class="btn btn-secondary">Hủy</button></a>
      </div>
      <div class="box-userInfo-content-right">
        <div class="box-userInfo-content-right-img">
          <img
            src="<?php if(isset($inforUser['u_img'])) echo $pathUpload.$inforUser['u_img']; else echo 'https://tse4.mm.bing.net/th?id=OIP.w105elCPL6VfL7OJqHcmjgHaE8&pid=Api&P=0&h=220'; ?>"
            alt=""
            id="userInfo-avatar"
          />
          <label for="changeFile"><i class="fa-solid fa-pen-to-square"></i></label>
          <input type="file" name="u_img" id="changeFile" onchange="chooseFile(this,'userInfo-avatar')">
        </div>
      </div>
    </form>
  </div>
</div>