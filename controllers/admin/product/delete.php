<?php
$idpp = $_GET['idpp'] ?? 0;
$id = $_GET['id'] ?? 0;
$idImg = $_GET['idimg'] ?? 0;
if ($idpp) {
    $idpro = $_GET['idpro'] ?? 0;
    PPDelete($idpp);
    $listPP = PPAll(['*'], "pp_proid = $idpro");
    if (empty($listPP)) {
        $proCat = ProCatAll(['*'], "pc_idpro = $idpro");
        ProductDelete($idpro);
        for ($i = 0; $i < sizeof($proCat); $i++) {
            ProCatDelete($proCat[$i]['id']);
        }
        reUrl('product/list');
    }
    reUrl("product/chitiet&id=".$idpro);
}
if ($id) {
    $proCat = ProCatAll(['*'], "pc_idpro = $id");
    $listPP = PPAll(['*'], "pp_proid = $id");
    $listImg = ProImgAll(['*'], "proid = $id");
    for ($i = 0; $i < sizeof($listPP); $i++) {
        PPDelete($listPP[$i]['id']);
    }
    for ($i = 0; $i < sizeof($proCat); $i++) {
        ProCatDelete($proCat[$i]['id']);
    }
    for ($i = 0; $i < sizeof($listImg); $i++) {
        ProImgDelete($listImg[$i]['id']);
    }
    ProductDelete($id);
    reUrl('product/list');
}
if($idImg){
    $idPro = $_GET['idpro'];
    ProImgDelete($idImg);
    reUrl("product/update&id=".$idPro);
}
