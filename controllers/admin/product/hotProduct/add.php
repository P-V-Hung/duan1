<?php 
    $id = $_GET['idpro'] ?? 0;
    if($id){
        $data = [
            'idpro' => $id
        ];
        ProductHotInsert($data);
    }
    reUrl("product/hotproduct");
?>