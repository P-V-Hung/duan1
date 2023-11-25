<?php
    $id = $_GET['id'] ?? 0;
    $idpro = $_GET['idpro'] ?? 0;
    CommentDelete($id);
    setcookie('comdelete',true, time() + 1);
    reUrlClient('chitietsp&id='.$idpro);
?>