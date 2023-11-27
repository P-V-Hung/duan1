<?php 
    $listComment = CommentAll();
    $echoListComment = [];
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
        $echoListComment[] = $cm;
    }

    if(isset($_POST['btn-deletes-c'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            CommentDelete($id);
            reUrl('comment/list');
        }
    }
    if(isset($_POST['btn-lock-c'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'com_status' => 2,
            ];
            CommentUpdate(''.$id, $data);
            reUrl('comment/list');
        }
    }
    if(isset($_POST['btn-unlock-c'])){
        $btn = array_pop($_POST);
        foreach($_POST as $id){
            $data = [
                'com_status' => 1,
            ];
            CommentUpdate(''.$id, $data);
            reUrl('comment/list');
        }
    } 
    require $views."comment/list.php";
?>