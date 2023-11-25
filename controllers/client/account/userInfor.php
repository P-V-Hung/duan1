<?php
$inforUser = AccountFind('id = '.$_SESSION['user']['id']);
if(isset($inforUser)) require_once $views . "account/userInfor.php";
else reUrlClient('/');
?>