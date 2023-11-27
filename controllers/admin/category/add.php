<?php

$listCategory = CategoryAll();

if(isset($_POST['btn_add-cat'])){
    $data = [
        'cat_name' => $_POST['cat-name'],
        'cat_idparent' => $_POST['cat_idparent']
    ];
    CategoryInsert($data);
    reUrl('category/list');
}
require_once $views."category/add.php";
?>