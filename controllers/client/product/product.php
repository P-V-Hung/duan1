<?php 
    $keyword = $_POST['keyword'] ?? '';

    $cate = [];
    if(isset($_POST['btn-cate'])){
        $_SESSION['cate'] = $_POST['btn-cate'];
        $cate = CategoryFind("id = ".$_POST['btn-cate']);
    }


    $listProducts = ProductAll(['*'],"pro_status = 0");
    if(!empty($keyword)){
        $listProducts = ProductAll(['*'],"pro_status = 0 and pro_name like '%$keyword%'");
    }
    $listPP = PPAll(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'],"1 group by pp_proid");

    if($_SESSION['cate']!=0){
        $listProducts = [];
        $proCat = ProCatAll(['pc_idpro'],'pc_idcat = '.$_SESSION['cate']);
        foreach($proCat as $pc){
            $pro = ProductFind("id = ".$pc['pc_idpro']);
            $listProducts[] = $pro;
        }
    }

    if(isset($_POST['btn-price'])){
        $dk = 1;
        switch($_POST['btn-price']){
            case 1:{
                $dk = "pp_price > 1000000 and pp_price <= 4000000";
                break;
            }
            case 2:{
                $dk = "pp_price > 4000000 and pp_price <= 10000000";
                break;
            }
            case 3:{
                $dk = "pp_price > 10000000 and pp_price <= 15000000";
                break;
            }
            case 4:{
                $dk = "pp_price > 15000000 and pp_price <= 20000000";
                break;
            }
            case 5:{
                $dk = "pp_price > 20000000 and pp_price <= 25000000";
                break;
            }
            case 6:{
                $dk = "pp_price > 25000000 and pp_price <= 30000000";
                break;
            }
            case 7:{
                $dk = "pp_price > 30000000 and pp_price <= 35000000";
                break;
            }
            case 8:{
                $dk = "pp_price > 35000000";
                break;
            }
        }
        $listPP = PPAll(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'],"$dk group by pp_proid");
    }

    $listCats = CategoryAll(['*'],"cat_idparent = ".$_SESSION['cate']);
    require $views."product/product.php";
?>