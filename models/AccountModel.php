<?php 
    function AccountAll($select = ['*'], $where = 1){
        return all("users",$select,$where);
    }
?>