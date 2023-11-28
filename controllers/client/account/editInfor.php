<?php
$inforUser = AccountFind('id = '.$_SESSION['user']['id']);
$inforUser['u_address'] = strstr($inforUser['u_address'],",",true);
$id = $inforUser['id'];
$account = AccountFind("id = ".$id);
    if(isset($_POST['btn-editInfor'])){
        $img=$_FILES['u_img'];
        $imgPath=$account['u_img'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
            $imgPath=basename($img['name']);
        }
        $data = [
            'id' => $id,
            'u_username' => $_POST['u_username'],
            'u_fullname' => $_POST['u_fullname'],
            'u_img' => $imgPath,
            'u_email' => $_POST['u_email'],
            'u_address' => $_POST['u_address'].", ".$_POST['xa'].", ".$_POST['huyen'].", ".$_POST['tinh'],
            'u_tel' => $_POST['u_tel'],
            'u_role' => $account['u_role']
        ];
        AccountUpdate($id, $data);
        $_SESSION['user'] = $data;
        setcookie('editInfor',true,time()+ 1);
        reUrlClient('userInfor');
    }
require_once $views . "account/editInfor.php";
?>