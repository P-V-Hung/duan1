<?php
session_start();
require_once "../config/pdo.php";
require_once "../config/function.php";
require_once '../models/CategoryModel.php';
if(!isset($_SESSION['output'])){
    $_SESSION['output'] = "";
}
if(isset($_POST['selectCatParent'])){
    $_SESSION['output'] = "";
    select($_POST['id_parent']);
}
if (isset($_POST['selectCat'])) {
    select($_POST['id_parent']);
}

function select($id){
    $output = "";
    $cat = CategoryFind("id = ".$id);
    if(!empty($cat)){
        $_SESSION['output'] .= '
        <div class="input-group">
        <div class="input-group-text">
        <input class="form-check-input mt-0" checked  name="checkCat' . $cat["id"] . '" value="' . $cat["id"] . '" type="checkbox" name="' . $cat["id"] . '">
        </div>
        <label class="form-control">' . $cat["cat_name"] . '</label>
        </div>
        <br>
        <hr>
        <br>
        ';
    }
    $categories = CategoryAll(['*'], "cat_idparent = " . $id);
    if (empty($categories)) {
        $output .= "<p style='color:red'>Không có danh mục con</p><br>";
    } else {
        foreach ($categories as $cat) {
            $output .= ' <div class="input-group">
            <div class="input-group-text">
            <input class="form-check-input mt-0 checkCatChild"  name="checkCat' . $cat["id"] . '" value="' . $cat["id"] . '" type="checkbox" name="' . $cat["id"] . '">
            </div>
            <label class="form-control">' . $cat["cat_name"] . '</label>
            </div> ';
        }
        
    }
    echo $_SESSION['output'];
    echo $output;
}

