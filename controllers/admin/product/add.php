<?php
$properties = PropertyAll();
$listCategory = CategoryAll();
if (isset($_POST['btn_add-pro'])) {
    $img = $_FILES['img'];
    $imgPath = basename($img['name']);
    move_uploaded_file($img['tmp_name'], $pathUpload . $imgPath);
    $dataPro = [
        'pro_name' => trim($_POST['pro_name']),
        'pro_desc' => $_POST['pro_desc'],
        'pro_img' => $imgPath,
        'pro_status' => $_POST['pro_status']
    ];
    $id = ProductInsertId($dataPro);

    $dataPP = [
        'pp_proid' => $id,
        'pp_price' => $_POST['pp_price'],
        'pp_color' => $_POST['pp_color'],
        'pp_memory' => $_POST['pp_memory'],
        'pp_count' => $_POST['pp_count']
    ];
    
    PPInsert($dataPP);

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
}
require $views . "product/addpro.php";
