<?php

$listCategory = CategoryAll();

if(isset($_POST['btn_add-cat'])){
    $data = [
        'cat_name' => $_POST['cat-name'],
        'cat_idparent' => $_POST['cat_idparent']
    ];
    CategoryInsert($data);
}
require_once $views."category/add.php";
?>