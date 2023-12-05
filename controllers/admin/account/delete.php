<?php 
    $idacc = $_GET['id'] ?? 0;
    AccountDelete($idacc);
    $_SESSION["delAcc"] = true;
    reUrl("account/list");
?>