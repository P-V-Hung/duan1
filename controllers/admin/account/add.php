<?php
$listAccount = AccountAll();
$check = 0;
if(isset($_POST['btn_add-acc'])){
    $img = $_FILES['u_img'];
    $imgPath = null;
    if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
        $imgPath = basename($img['name']);
    }
    if($_POST['u_username']==""||$_POST['u_email']==""||$_POST['u_password']==""||$_POST['u_role']=="") $check = 2;
    else{$data = [
        'u_username' => $_POST['u_username'],
        'u_fullname' => $_POST['u_fullname'],
        'u_email' => $_POST['u_email'],
        'u_img' => $imgPath,
        'u_password' => $_POST['u_password'],
        'u_address' => $_POST['u_address'],
        'u_tel' => $_POST['u_tel'],
        'u_role' => $_POST['u_role'],
        'u_create' => date('Y-m-d')
    ];
    AccountInsert($data);
    $check = 1;}
}
if($check == 1) logSuccess("Thêm tài khoản thành công");
else if($check == 2) logWarning("Vui lòng nhập các trường thông tin bắt buộc");
require_once $views."account/add.php";
?>