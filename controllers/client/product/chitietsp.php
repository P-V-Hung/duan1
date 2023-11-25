<?php

if(isset($_COOKIE['addComment'])){
    logSuccess("Đã thêm bình luận");
}
if(isset($_COOKIE['comdelete'])){
    logSuccess("Đã xóa bình luận");
}

$idpro = $_GET['id'];
$pro = ProductFind("id = $idpro");

// updateviews
ProductUpdateUp($idpro, "pro_views");

$listImg = ProImgAll(['*'], "proid = $idpro");

$proPP = PPFind(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'], "pp_proid = $idpro");

$listProPP = PPAll(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'], "1 group by pp_proid");

$proCat = ProCatAll(['*'], "pc_idpro = $idpro");
$listCat = [];
$listSpLq = [];
foreach ($proCat as $catId) {
    $cat = CategoryFind("id = " . $catId['pc_idcat']);
    $catAllLq = ProCatAll(['pc_idpro'], "pc_idcat = " . $catId['pc_idcat'] . " and pc_idpro != $idpro");
    $catName = $cat['cat_name'];
    foreach ($catAllLq as $catlq) {
        $products = ProductFind("id = " . $catlq['pc_idpro']);
        $listSpLq[$catName][] = $products;
    }
    $listCat[] = $cat;
}

$phanloai = PPAll(['pp_color'], "pp_proid = $idpro group by pp_color");
$color = $_GET['color'] ?? null;
$memory = $_GET['memory'] ?? null;
$cauhinh = PPAll(['pp_memory'], "pp_proid = $idpro and pp_color like '%$color%' group by pp_memory");
if ($color) {
    $proPP = PPFind(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'], "pp_proid = $idpro and pp_color like '%$color%'");
}
if ($color == '' && $memory) {
    $phanloai = PPAll(['pp_color'], "pp_proid = $idpro and pp_memory like '%$memory%' group by pp_color");
}
if ($color && $memory) {
    $proOne = PPFind(['*'], "pp_proid = $idpro and pp_color like '%$color%' and pp_memory like '%$memory%'");
}

$listType = TypeProAll(['*'], "tp_proid = $idpro");
$listThongSo = [];
foreach ($listType as $key => $type) {
    $properties = PropertyFind(['*'], "id = " . $type['tp_pid']);
    $listThongSo[] = [
        'name' => $properties['p_name'],
        'value' => $type['tp_name']
    ];
}

// comment
$mua = false;
$comment = false;
if (isset($_SESSION['user'])) {
    $bilId = BillInfoFind(['bill_id'], "userid = " . $_SESSION['user']['id'] . " and proid = " . $pro['id']);
    if (!empty($bilId)) {
        $billStatus = BillFind(['bill_status'], "id = " . $bilId['bill_id']);
        if(!empty($billStatus)){
            if ($billStatus['bill_status'] == 5) {
                $mua = true;
                $userComment = CommentFind(['*'], "com_userid = " . $_SESSION['user']['id'] . " and com_proid = " . $pro['id']);
                if(!empty($userComment)){
                    $comment = true;
                }
            }
        }
    }
}

$dsComment = [];
$listComment = CommentAll(['*'],"com_proid = ".$pro['id']." and com_status = 1");
if(isset($_SESSION['user'])){
    $listComment = CommentAll(['*'],"com_proid = ".$pro['id']." and com_status = 1 and com_userid <> ".$_SESSION['user']['id']);
}
foreach($listComment as $cm){
    $us = AccountFind("id = ".$cm['com_userid'],['u_fullname','u_img','u_username']);
    $com = [
        'text' => $cm['com_content'],
        'img' => $cm['com_img'],
        'reating' => $cm['com_reating'],
        'text' => $cm['com_content'],
        'date' => $cm['com_date'],
        'user' => empty($us['u_fullname'])?$us['u_username']:$us['u_fullname'],
        'user_img' => $us['u_img'],
    ]; 
    $dsComment[] = $com;
}
if(isset($_POST['btn-add-comment'])){
    $img = $_FILES['img'];
    $imgPath = '';
    if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
        $imgPath = basename($img['name']);
    }
    $data = [
        'com_content' => $_POST['desc'],
        'com_img' => $imgPath,
        'com_userid' => $_SESSION['user']['id'],
        'com_proid' => $pro['id'],
        'com_date' => date('Y-m-d'),
        'com_reating' => $_POST['reating'],
    ];
    CommentInsert($data);
    setcookie('addComment',true, time() + 1);
    reUrlClient('chitietsp&id='.$pro['id']);
}
require_once $views . "product/chitietsp.php";
