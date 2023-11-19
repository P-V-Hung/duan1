<?php 
    $idpro = $_GET['id'] ?? 0;
    $pro = ProductFind("id = $idpro");
    if(isset($_POST['btn_add-pp'])){
        $img = $_FILES['img'];
        $imgPath = $pro['pro_img'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
            $imgPath = basename($img['name']);
        }
        $data = [
            'pp_proid' => $idpro,
            'pp_price' => $_POST['pp_price'],
            'pp_color' => $_POST['pp_color'],
            'pp_memory' => $_POST['pp_memory'],
            'pp_img' => $imgPath,
            'pp_count' => $_POST['pp_count']
        ];
        PPInsert($data);
    }
    require $views."product/addpp.php";
?>