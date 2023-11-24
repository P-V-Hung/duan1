<?php 
    $idacc = $_GET['id'] ?? 0;
    AccountDelete($idacc);
    reUrl("account/list");
?>