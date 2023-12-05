<?php 
    function listCom(){
        $list = [];
        $listComment = CommentAll();
        foreach ($listComment as $comment) {
            $pro = ProductFind("id = ".$comment["com_proid"]);
            $user = AccountFind("id = ".$comment["com_userid"]);
            $cm = $comment;
            if(!empty($pro)) {
                $cm['pro_name'] = $pro['pro_name'];
            }else{
                $cm['pro_name'] = "Sản phẩm đã bị xóa";
            }
            if(!empty($user)) {
                $cm['username'] = $user['u_username'];
            }else{
                $cm['username'] = "Tài khoản đã bị xóa";
            }
            $list[] = $cm;
        }
        return $list;
    }
    $echoListComment = listCom();

    if(isset($_POST['btn-deletes-c'])){
        $btn = array_pop($_POST);
        $check = false;
        foreach($_POST as $id){
            CommentDelete($id);
            $check = true;
        }
        if($check){
            $_SESSION['delCom'] = true;
        }
        $echoListComment = listCom();
    }
    $checkListCom = false;
    if(isset($_POST['btn-lock-c'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'com_status' => 2,
            ];
            CommentUpdate(''.$id, $data);
            $checkListCom = true;
        }
        if($checkListCom) $_SESSION["checkListCom"] = true;
        $echoListComment = listCom(); 
    }
    if(isset($_POST['btn-unlock-c'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'com_status' => 1,
            ];
            CommentUpdate(''.$id, $data);
            $checkListCom = true;
        }
        if($checkListCom) $_SESSION["checkListCom"] = true;
        $echoListComment = listCom();
    } 
    if(isset($_SESSION['delCom'])){
        logSuccess('Xóa nhiều bình luận thành công');
        unset($_SESSION['delCom']);
    }
    if(isset($_SESSION["checkListCom"])) {
        logSuccess("Cập nhật thành công");
        unset($_SESSION["checkListCom"]);
    }
    require $views."comment/list.php";
?>