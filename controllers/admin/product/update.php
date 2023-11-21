<?php
$idpp = $_GET['idpp'] ?? 0;
$id = $_GET['id'] ?? 0;
if ($idpp) {
    $proPP = PPFind(['*'], 'id = ' . $idpp);
    $pro = ProductFind('id = ' . $proPP['pp_proid']);
    if (isset($_POST['btn_update-pp'])) {

        $data = [
            'pp_price' => $_POST['pp_price'],
            'pp_color' => $_POST['pp_color'],
            'pp_memory' => $_POST['pp_memory'],
            'pp_count' => $_POST['pp_count']
        ];

        PPUpdate($idpp, $data);

        reUrl("product/chitiet&id=".$pro['id']);

    }
    require $views . "product/updatepp.php";
}
if ($id) {
    $typePro = TypeProAll(['*'], "tp_proid = $id");
    $properties = PropertyAll();
    $proCat = ProCatAll(['*'], "pc_idpro = $id");
    $pro = ProductFind("id = $id");
    $listImg = ProImgAll(['*'],"proid = $id");
    $listCategory = CategoryAll();

    if (isset($_POST['btn_update-pro'])) {
        $img = $_FILES['img'];
        $imgPath = $pro['pro_img'];
        if (move_uploaded_file($img['tmp_name'], $pathUpload . $img['name'])) {
            $imgPath = basename($img['name']);
        }
        $dataPro = [
            'pro_name' => trim($_POST['pro_name']),
            'pro_desc' => $_POST['pro_desc'],
            'pro_img' => $imgPath,
            'pro_status' => $_POST['pro_status']
        ];
        ProductUpdate($id, $dataPro);

        $idCat = [];
        $idProperty = [];
        $properValue = [];

        foreach ($_POST as $key => $val) {
            if (strstr($key, 'checkCat')) {
                array_push($idCat, $val);
            }

            if (strstr($key, 'checkProperty')) {
                array_push($idProperty, $val);
            }

            if (strstr($key, 'checkValue')) {
                array_push($properValue, $val);
            }
        }

        // delete
        for ($i = 0; $i < sizeof($proCat); $i++) {
            ProCatDelete($proCat[$i]['id']);
        }
        for ($i = 0; $i < sizeof($typePro); $i++) {
            TypeProDelete($typePro[$i]['id']);
        }



        // insert
        for ($i = 0; $i < sizeof($idCat); $i++) {
            $data = [
                'pc_idpro' => $id,
                'pc_idcat' => $idCat[$i]
            ];
            ProCatInsert($data);
        }
        $arrayProperValue = [];
        foreach ($properValue as $val) {
            if (!empty($val)) {
                $arrayProperValue[] = $val;
            }
        }
        for ($i = 0; $i < sizeof($idProperty); $i++) {
            $valueProper = $arrayProperValue[$i] ?? '';
            $data = [
                'tp_proid' => $id,
                'tp_pid' => $idProperty[$i],
                'tp_name' => $valueProper
            ];
            TypeProInsert($data);
        }
        
        reUrl('product/list');
        die();
    }

    require $views . "product/updatepro.php";
}
