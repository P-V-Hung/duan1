<?php
    // billinfo
    function BillInfoFind($select = ['*'],$where = 1){
        return find("bill_info",$select,$where);
    }
    function BillInfoInsert($data = []){
        return insert("bill_info",$data);
    }
    function BillInfoDelete($id = 0){
        return delete("bill_info",$id);
    }
    function BillInfoAll($select = ['*'],$where = 1){
        return all("bill_info",$select,$where);
    }

    // bill
    function BillFind($select = ['*'],$where = 1){
        return find("bill",$select,$where);
    }
    function BillUpdate($id,$data = []){
        return update('bill',$id,$data);
    }
    function BillDelete($id = 0){
        return delete("bill",$id);
    }
    function BillInsertId($data=[]){
        $idBill = lastInsertId("bill",$data);
        return $idBill;
    }
    function BillAll($select = ['*'],$where = 1){
        return all("bill",$select,$where);
    }
    function BillStatusFind($select = ['*'],$where = 1){
        return find("bill_status",$select,$where);
    }

    // billstatus
    function BillStatusAll($select = ['*'],$where = 1){
        return all("bill_status",$select,$where);
    }
?>