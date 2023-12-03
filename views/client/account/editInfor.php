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
            <td style="min-width: 150px;">Tên đăng nhập</td>
            <td><input type="text" id="user" name="u_username" value="<?php if (isset($inforUser['u_username'])) echo $inforUser['u_username'] ?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" id="email" name="u_email" value="<?php if (isset($inforUser['u_email'])) echo $inforUser['u_email'] ?>" /></td>
          </tr>
          <tr>
            <td>Họ và tên</td>
            <td><input type="text" id="fullname" name="u_fullname" value="<?php if (isset($inforUser['u_fullname'])) echo $inforUser['u_fullname'] ?>"></td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td><input type="text" id="tel" name="u_tel" value="<?php if (isset($inforUser['u_tel'])) echo $inforUser['u_tel'] ?>"></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td class="api-tinh">
              <select class="form-select" id="tinh">
                <option value="">Chọn tỉnh thành</option>
              </select>
              <input type="hidden" id="inputTinh" value="" name="tinh">
              <select class="form-select my-1" id="huyen">
                <option value="">Chọn quận huyện</option>
              </select>
              <input type="hidden"  id="inputHuyen" value="" name="huyen">
              <select  class="form-select" id="xa">
                <option value="">Chọn xã</option>
              </select>
              <input type="hidden"  id="inputXa" value="" name="xa">
            </td>
          </tr>
          <tr>
            <td>Chi tiết</td>
            <td><input placeholder="Địa chỉ chi tiết" type="text" id="address" name="u_address" value="<?php if (isset($inforUser['u_address'])) echo $inforUser['u_address'] ?>"></td>
          </tr>
        </table>
        <input type="hidden" id="iduser" value="<?= $inforUser['id'] ?>">
        <button type="submit" name="btn-editInfor" id="btn-editInfor" class="btn btn-success">Lưu thông tin</button>
        <a href="<?= $clientUrl . "userInfor" ?>" class="btn"><button type="button" class="btn btn-secondary">Hủy</button></a>
      </div>
      <div class="box-userInfo-content-right">
        <div class="box-userInfo-content-right-img">
          <img src="<?php
                        if((!isset($inforUser['u_img']))||($inforUser['u_img']=="")) echo $pathUpload.'user.jpg'; 
                        else echo $pathUpload.$inforUser['u_img']; 
                    ?>?>" alt="" id="userInfo-avatar" />
          <label for="changeFile"><i class="fa-solid fa-pen-to-square"></i></label>
          <input type="file" class="imageUser" name="u_img" id="changeFile" onchange="chooseFile(this,'userInfo-avatar')">
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  $(document).ready(function() {
    $("#tinh").on('change',function() {
      tinh = $("#tinh").find("option:selected").text();
      $('#inputTinh').val(tinh);
    });
    $("#huyen").on('change',function() {
      huyen = $("#huyen").find("option:selected").text();
      $('#inputHuyen').val(huyen);
    });
    $("#xa").on('change',function() {
      xa = $("#xa").find("option:selected").text();
      $('#inputXa').val(xa);
    });
  });
</script>