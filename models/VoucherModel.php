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
    function VoucherUpdateUp($id,$truong,$count=1){
        return updateUp("vouchers",$id,$truong,$count);
    }
?>