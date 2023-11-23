<?php 
    function VoucherAll($select = ['*'], $where = 1){
        return all("vouchers",$select,$where);
    }
    function VoucherDelete($id = 0){
        return delete("vouchers",$id);
    }
    function VoucherInsert($data = []){
        return insert("vouchers",$data);
    }
?>