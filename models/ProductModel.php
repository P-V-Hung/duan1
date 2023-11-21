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
    // Pro_Properties
    function PPAll($select = ['*'], $where = 1){
        return all("pro_properties",$select,$where);
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
    function TypeProDelete($id = 0){
        return delete("type_properties", $id);
    }
    function TypeProInsert($data = []){
        return insert("type_properties", $data);
    }
?>