<?php 
    $idacc = $_GET['id'] ?? 0;
    $account = AccountFind("id = ".$idacc);
    if(isset($_POST['btn_update-acc'])){
        $img=$_FILES['u_img'];
        $imgPath=$account['u_img'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
            $imgPath=basename($img['name']);
        }
        $data = [
            'u_username' => $_POST['u_username'],
            'u_fullname' => $_POST['u_fullname'],
            'u_img' => $imgPath,
            'u_email' => $_POST['u_email'],
            'u_password' => $_POST['u_password'],
            'u_address' => $_POST['u_address'],
            'u_tel' => $_POST['u_tel'],
            'u_status' => $_POST['u_status'],
            'u_role' => $_POST['u_role']
        ];
        AccountUpdate(''.$idacc, $data);
        reUrl('account/list');
    }
    require $views.'account/update.php';
?>