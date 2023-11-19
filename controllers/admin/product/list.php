<?php
    $listProducts = ProductAll();
    $listPP = PPAll(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"1 group by pp_proid");
    require $views."product/list.php";
?>