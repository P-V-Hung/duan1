<?php
    // billinfo
    function BillInfoFind($select = ['*'],$where = 1){
        return find("bill_info",$select,$where);
    }
    function BillFind($select = ['*'],$where = 1){
        return find("bill",$select,$where);
    }
?>