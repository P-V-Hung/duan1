<?php
require_once "../config/pdo.php";
require_once "../config/function.php";
require_once '../models/CategoryModel.php';
if (isset($_POST['insertTable'])) {
    if ($_POST['idparent']) {
        $listCat = CategoryAll(['*'], "cat_idparent = " . $_POST['idparent']." order by id desc");
    } else {
        $listCat = CategoryAll(['*'], "cat_idparent = 0 order by id desc");
    }

    $output = '
            <table class="table table-reponse">
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Danh mục con</th>
                    <th>Thao tác</th>
                </tr>
        ';
    if (empty($listCat)) {
        $output .=  '
            <tr>
                <td colspan="4" class="text-center">Không có danh mục nào</td>
            </tr>
        ';
    } else {
        foreach ($listCat as $cat) {
            $output .= '
            <tr>
            <td>' . $cat['id'] . '</td>
            <td class="catname" data-id=' . $cat['id'] . ' contenteditable >' . $cat['cat_name'] . '</td>
            <td><button class="catchild btn" data-id=' . $cat['id'] . '><i>danh mục con </i></button></td>
            <td><button  data-id=' . $cat['id'] . ' class="btn btn-danger btn-del-cart">Xóa</button></td>
          </tr>
        ';
        }
    }

    $output .= '</table>';

    echo $output;
}
if (isset($_POST['updateColumn'])) {
    $id = $_POST['id'];
    $text = $_POST['text'];
    $column = $_POST['column'];
    $data = [
        $column => $text
    ];
    CategoryUpdate($id, $data);
    logSuccess('Chỉnh sửa thành công');
}
if (isset($_POST['deleteColumn'])) {
    $id = $_POST['id'];
    $listCat = CategoryAll(['*'],"cat_idparent = " . $id);
    if(empty($listCat)){
        CategoryDelete($id);
        logSuccess('Xóa thành công');
    }else{
        logError('Vui lòng xóa hết các danh mục con');
    }
}
if (isset($_POST['addColumn'])) {
    $idparent = $_POST['id'];
    $text = $_POST['text'];
    if(empty($text)){
        logWarning('Vui lòng nhập dữ liệu');
    }else{
        $data = [
            'cat_name' => $text,
            'cat_idparent' => $idparent
        ];
        CategoryInsert($data);
        logSuccess('Thêm thành công');

    }
}
if (isset($_POST['back'])) {
    $id = $_POST['id'];
    if($id == 0){
        logWarning('Đây là danh mục gốc');
    }else{
        $cat = CategoryFind("id = ".$id);
        echo $cat['cat_idparent'];
    }
}
