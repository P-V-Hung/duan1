<?php
    if (!isset($_SESSION['categorys'])) {
        $_SESSION['categorys'] = [];
    }
    $categoryId = $_GET['id'] ?? 0;
    $recat = $_GET['recat'] ?? 1;

    if($categoryId != 0){
        $category = CategoryFind('id = '.$categoryId,['cat_name','id']);
        $_SESSION['categorys'][] = $category;
    }
    if($recat == 0){
        $key = array_search($categoryId, array_column($_SESSION['categorys'], 'id'));
        if ($key !== false) {
            array_splice($_SESSION['categorys'], $key+1);
        }else{
            array_splice($_SESSION['categorys'], 0);
        }
    }
    $listCategory = CategoryAll(['*'],'cat_idparent = '.$categoryId);
    require $views."category/list.php";
?>