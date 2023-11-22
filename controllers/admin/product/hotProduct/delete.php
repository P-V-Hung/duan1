<?php 
    $id = $_GET['id'] ?? 0;
    if($id){
        ProductHotDelete($id);
    }
    reUrl("product/hotproduct");
?>