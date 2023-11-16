<?php
    function ProductAll($select = ['*'], $where = 1){
        return all("products",$select,$where);
    }
?>