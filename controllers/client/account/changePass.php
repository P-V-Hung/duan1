<?php 
    $inforUser = AccountFind('id = '.$_SESSION['user']['id']);
    $id = $inforUser['id'];
    $account = AccountFind("id = ".$id);

    if(isset($_POST['btn-changePass'])){
        if($_POST['u_pass'] === $inforUser['u_password']){
            $data = [
                'u_password' => $_POST['u_newPass'],
            ];
            AccountUpdate(''.$id, $data);
            setcookie('userInfor',true,time()+ 1);
            reUrlClient('userInfor');
        }else{
            logError('Mật khẩu sai!');
        }
    }
    require_once $views."account/changePass.php";
?>