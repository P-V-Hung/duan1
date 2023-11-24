<?php 
    function AccountAll($select = ['*'], $where = 1){
        return all("users",$select,$where);
    }
    function AccountInsert($data = []){
        return insert("users",$data);
    }
    function AccountDelete($id = 0){
        return delete("users",$id);
    }
    function AccountFind($where=1, $select =['*']){
        return find("users" ,$select , $where);
    }
    function AccountUpdate($id = 0,$data = []){
        return update("users",$id,$data);
    }
?>