<?php 
    $idcom = $_GET['id'] ?? 0;
    CommentDelete($idcom);
    $_SESSION['delCom'] = true;
    reUrl("comment/list");
?>