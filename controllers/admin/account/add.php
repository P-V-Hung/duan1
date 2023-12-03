<?php

$listAccount = AccountAll();
if(isset($_POST['btn_add-acc'])){
    $img = $_FILES['u_img'];
    $imgPath = null;
    if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
        $imgPath = basename($img['name']);
    }
    $data = [
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
    setcookie("addSucces", true, time() + 1);
    reUrl('account/add');
}

require_once $views."account/add.php";
?>