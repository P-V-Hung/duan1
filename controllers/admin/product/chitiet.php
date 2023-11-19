<?php 
    $idpro = $_GET['id'] ?? 0;
    $proPP = PPAll(['*'],"pp_proid = $idpro");
    $pro = ProductFind("id = $idpro");
    require $views."product/chitiet.php";
?>