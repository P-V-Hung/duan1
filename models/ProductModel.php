<?php
// Product
    function ProductAll($select = ['*'], $where = 1){
        return all("products",$select,$where);
    }
    function ProductDelete($id){
        return delete("products",$id);
    }
    function ProductFind($id = 0,$select = ['*']){
        return find("products",$select,$id);
    }
    function ProductUpdate($id = 0,$data = []){
        return update("products",$id, $data);
    }
    function ProductInsert($data = []){
        return insert("products",$data);
    }
    function ProductInsertId($data = []){
        return lastInsertId("products",$data);
    }
    function ProductUpdateUp($id,$truong,$count = 1){
        return updateUp("products",$id,$truong,$count);
    }
    // Pro_Properties
    function PPAll($select = ['*'], $where = 1){
        return all("pro_properties",$select,$where);
    }
    function PPUpdateDown($id = 0, $truong = '',$count=1){
        return updateDown("pro_properties",$id,$truong,$count);
    }
    function PPUpdateUp($id = 0, $truong = '',$count=1){
        return updateUp("pro_properties",$id,$truong,$count);
    }
    function PPFind($select = ['*'], $where = 1){
        return find("pro_properties",$select,$where);
    }
    function PPUpdate($id = 0,$data = []){
        return update("pro_properties",$id,$data);
    }
    function PPInsert($data = []){
        return insert("pro_properties",$data);
    }
    function PPDelete($id){
        return delete("pro_properties",$id);
    }
    // Pro Img
    function ProImgAll($select = ['*'], $where = 1){
        return all("pro_img",$select,$where);
    }
    function ProImgDelete($id){
        return delete("pro_img",$id);
    }
    function ProImgInsert($data = []){
        return insert("pro_img",$data);
    }
    
    // Hot Product
    function ProductHotAll($select = ['*'], $where = 1){
        return all("hot_products",$select,$where);
    }
    function ProductHotFind($select = ['*'], $where = 1){
        return find("hot_products",$select,$where);
    }
    function ProductHotDelete($id){
        return delete("hot_products",$id);
    }
    function ProductHotInsert($data = []){
        return insert("hot_products",$data);
    }

    // Properties
    function PropertyAll($select = ['*'], $where = 1){
        return all("properties",$select,$where);
    }
    function PropertyFind($select = ['*'], $where = 1){
        return find("properties",$select,$where);
    }
    function PropertyInsert($data){
        return insert("properties",$data);
    }
    function PropertyDelete($id){
        return delete("properties",$id);
    }
    // TypeProperties
    function TypeProAll($select = ['*'], $where = 1){
        return all("type_properties",$select,$where);
    }
    function TypeProFind($select = ['*'], $where = 1){
        return find("type_properties",$select,$where);
    }
    function TypeProDelete($id = 0){
        return delete("type_properties", $id);
    }
    function TypeProInsert($data = []){
        return insert("type_properties", $data);
    }
?>