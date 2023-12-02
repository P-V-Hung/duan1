<div class="box-userInfo">
  <div class="box-userInfo-header">
    <h3>Hồ sơ của tôi</h3>
    <p>Quản lí thông tin hồ sơ để bảo mật tài khoản</p>
  </div>
  <div class="box-userInfo-content">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="box-userInfo-content-left">
        <table class="table">
          <tr>
            <td>Tên đăng nhập</td>
            <td><?php echo $inforUser['u_username'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $inforUser['u_email'] ?></td>
          </tr>
          <tr>
            <td>Họ và tên</td>
            <td><?php echo $inforUser['u_fullname'] ?></td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td><?php echo $inforUser['u_tel'] ?></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><?php echo $inforUser['u_address'] ?></td>
          </tr>
        </table>
        <a class="btn p-0" href="<?=$clientUrl."editInfor"?>"><span name="btnInfo" class="btn btn-success">Thay đổi thông tin</span></a>
        <a class="btn p-0" href="<?=$clientUrl."changePass"?>"><span name="btnInfo" class="btn btn-success">Đổi mật khẩu</span></a>
      </div>
      <div class="box-userInfo-content-right">
        <div class="box-userInfo-content-right-img">
          <img
            src="<?php
                        if((!isset($inforUser['u_img']))||($inforUser['u_img']=="")) echo $pathUpload.'user.jpg'; 
                        else echo $pathUpload.$inforUser['u_img']; 
                    ?>?>"
            alt=""
            id="userInfo-avatar"
          />
        </div>
      </div>
    </form>
  </div>
</div>
<?php 
  if(isset($_COOKIE['userInfor'])){
    logSuccess("Đổi mật khẩu thành công");
  }
  if(isset($_COOKIE['editInfor'])){
    logSuccess('Thay đổi thông tin tài khoản thành công');
  }
?>