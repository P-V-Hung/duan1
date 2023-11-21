<?php 
    $id = $_GET['idpro'] ?? 0;
    $pro = ProductFind('id = '.$id);
    $listImg = ProImgAll(['*'],"proid = $id");
    if(isset($_POST['btn-add-imgpro'])){
        $img = $_FILES['img'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload . $img['name'])){
            $data = [
                'proid' => $id,
                'img' => $img['name']
            ];
            ProImgInsert($data);
            reUrl("product/img/add&idpro=$id");
        }
    }
    require $views."product/addImg.php";
?>