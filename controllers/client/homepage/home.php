<?php 
    $hotProductId = ProductHotAll();
    $listHostProduct = [];
    $listProPP = PPAll(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"1 group by pp_proid");
    foreach($hotProductId as $id){
        $pro = ProductFind("id = ".$id['idpro']);
        $listHostProduct[] = $pro;
    }
    require $views."homepage/home.php";
?>