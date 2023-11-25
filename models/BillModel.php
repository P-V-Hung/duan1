<?php
    // billinfo
    function BillInfoFind($select = ['*'],$where = 1){
        return find("bill_info",$select,$where);
    }
    function BillInfoInsert($data = []){
        return insert("bill_info",$data);
    }

    // bill
    function BillFind($select = ['*'],$where = 1){
        return find("bill",$select,$where);
    }
    function BillInsertId($data=[]){
        return lastInsertId("bill",$data);
    }
?>