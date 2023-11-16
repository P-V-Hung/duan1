<?php
    $listProducts = ProductAll(['*'],'pro_status = 0');
    require $views."product/list.php";
?>