<?php 
function AccountInsert($data = []){
    return insert("users",$data);
}
function AccountFind($where=1, $select =['*']){
    return find("users" ,$select , $where);
}
?>