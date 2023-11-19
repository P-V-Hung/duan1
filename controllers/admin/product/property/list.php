<?php 
    $listProper = PropertyAll();
    if(isset($_POST['btn-add-p'])){
        $data = [
            'p_name' => $_POST['p_name']
        ];
        PropertyInsert($data);
        // header("Location: admin.php");
        // exit();
    }

    $id = $_GET['deleteId'] ?? 0;
    if($id){
        PropertyDelete($id);
    }

    if(isset($_POST['btn-deletes-p'])){
        $checkPer = [];
        foreach($_POST as $key => $val){
            if(strstr($key, 'checkProper')){
                $checkPer[] = $val;
            }
        }
        for($i = 0; $i < sizeof($checkPer); $i++){
            PropertyDelete($checkPer[$i]);
        }
    }
    require $views."product/property/list.php";
?>