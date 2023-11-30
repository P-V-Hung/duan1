<?php 
    $idcom = $_GET['id'] ?? 0;
    CommentDelete($idcom);
    reUrl("comment/list");
?>