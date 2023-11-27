<?php
$iddm = $_GET['id'] ?? null;
if ($iddm) {
    $category = CategoryFind('id = ' . $iddm);
    $categoryParent = CategoryFind('id = ' . $category['cat_idparent']);
    $childrenCategory = CategoryAll(['*'], 'cat_idparent = ' . $iddm);
    $idParent = is_array($categoryParent) ? $categoryParent['id'] : 0;
    $listCategory = CategoryAll();
    require_once $views . "category/update.php";
}
if (isset($_POST['btn_update-cat'])) {
    $iddm = $_GET['id'] ?? 0;
    $data = [
        'cat_name' => $_POST['cat-name'],
        'cat_idparent' => 0
    ];
    CategoryUpdate($iddm, $data);
    reUrl('category/list');
}
