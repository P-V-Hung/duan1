<?php 
    $iddm = $_GET['id'] ?? 0;
    CategoryDelete($iddm);
    reUrl('category/list');
?>