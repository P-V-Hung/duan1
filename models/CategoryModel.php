<?php
    function CategoryAll($select = ['*'], $where = 1){
        return all("categories",$select,$where);
    }
    function CategoryFind($where = 1,$select = ['*']){
        return find("categories",$select,$where);
    }

    function CategoryInsert($data = []){
        return insert("categories",$data);
    }

    function CategoryUpdate($id = 0,$data = []){
        return update("categories",$id,$data);
    }

    function CategoryDelete($id = 0){
        return delete("categories",$id);
    }
// Procat
    function ProCatAll($select = ['*'], $where = 1){
        return all("pro_cats",$select,$where);
    }
    function ProCatDelete($id = 0){
        return delete("pro_cats",$id);
    }
    function ProCatInsert($data = []){
        return insert("pro_cats",$data);
    }
?>