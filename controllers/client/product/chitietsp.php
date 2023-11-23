<?php 
    $idpro = $_GET['id'];
    $pro = ProductFind("id = $idpro");
    $proPP = PPFind(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"pp_proid = $idpro");

    $proCat = ProCatAll(['*'],"pc_idpro = $idpro");
    $listCat = [];
    foreach($proCat as $catId){
        $cat = CategoryFind("id = ".$catId['pc_idcat']);
        $listCat[] = $cat;
    }
    $phanloai = PPAll(['pp_color'],"pp_proid = $idpro group by pp_color");
    $color = $_GET['color'] ?? null;
    $memory = $_GET['memory'] ?? null;
    $cauhinh = PPAll(['pp_memory'],"pp_proid = $idpro and pp_color like '%$color%' group by pp_memory");
    if($color){
        $proPP = PPFind(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"pp_proid = $idpro and pp_color like '%$color%'");
    }
    if($color=='' && $memory){
        $phanloai = PPAll(['pp_color'],"pp_proid = $idpro and pp_memory like '%$memory%' group by pp_color");
    }
    if($color && $memory){
        $proOne = PPFind(['*'], "pp_proid = $idpro and pp_color like '%$color%' and pp_memory like '%$memory%'");
    }

    $listType = TypeProAll(['*'],"tp_proid = $idpro");
    $listThongSo = [];
    foreach($listType as $key => $type){
        $properties = PropertyFind(['*'],"id = ".$type['tp_pid']);
        $listThongSo[] = [
            'name' => $properties['p_name'],
            'value' => $type['tp_name']
        ];
    }
    require_once $views."product/chitietsp.php";
?>