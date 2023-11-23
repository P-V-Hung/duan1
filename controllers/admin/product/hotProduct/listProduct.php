<?php 
    $listProducts = ProductAll();
    $hotProductId = ProductHotAll();
    $listHotProduct = [];
    foreach($hotProductId as $id){
        $pro = ProductFind("id = ".$id['idpro']);
        $pro['idhot'] = $id['id'];
        array_push($listHotProduct, $pro);
        foreach($listProducts as $key => $pro){
            if($pro['id'] == $id['idpro']){
                unset($listProducts[$key]);
            }
        }
    }
    require $views."product/hotProduct/list.php";
?>