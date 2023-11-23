<?php 
    $idpro = $_GET['id'] ?? 0;
    $pro = ProductFind("id = $idpro");
    if(isset($_POST['btn_add-pp'])){
        $data = [
            'pp_proid' => $idpro,
            'pp_price' => $_POST['pp_price'],
            'pp_color' => $_POST['pp_color'],
            'pp_memory' => $_POST['pp_memory'],
            'pp_count' => $_POST['pp_count']
        ];
        PPInsert($data);
        reUrl("product/chitiet&id=".$idpro);
    }
    require $views."product/addpp.php";
?>