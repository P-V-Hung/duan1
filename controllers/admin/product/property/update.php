<?php 
    $id = $_GET['id'];
    $properties = PropertyFind(['*'],"id = $id");
    require $views."product/property/update.php";
?>