<?php 
    $listAccount = AccountAll();
    if(isset($_POST['btn-deletes-a'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            AccountDelete($id);
            reUrl('account/list');
        }
    }
    if(isset($_POST['btn-lock-a'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'u_status' => 2,
            ];
            AccountUpdate(''.$id, $data);
            reUrl('account/list');
        }
    }
    if(isset($_POST['btn-unlock-a'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'u_status' => 1,
            ];
            AccountUpdate(''.$id, $data);
            reUrl('account/list');
        }
    } 
    if(isset($_POST['btn-search'])){
        $keyword = $_POST['keyword'];
        $listAccount = AccountAll(['*'],"u_username like '%".$keyword."%' OR u_email like '%".$keyword."%' ");
    }
    if(isset($_SESSION['delAcc'])){
        logSuccess('Xóa tài khoản thành công');
        unset($_SESSION['delAcc']);
    }
    if(isset($_SESSION['updateAcc'])){
        logSuccess('Cập nhật thông tin tài khoản thành công');
        unset($_SESSION['updateAcc']);
    }
    require $views."account/list.php";
?>