<?php 
    $page_size = $_GET['size'] ?? 4;
    $page_current = $_GET['page'] ?? 1;
    $offset = ($page_current - 1) * $page_size;

    $keyword = $_POST['keyword'] ?? '';

    $cate = [];
    if(isset($_POST['btn-cate'])){
        $_SESSION['cate'] = $_POST['btn-cate'];
        $cate = CategoryFind("id = ".$_POST['btn-cate']);
    }


    $listProducts = ProductAll(['*'],"pro_status = 0 LIMIT $page_size OFFSET $offset");
    if(!empty($keyword)){
        $listProducts = ProductAll(['*'],"pro_status = 0 and pro_name like '%$keyword%' LIMIT $page_size OFFSET $offset");
    }
    $listPP = PPAll(['pp_proid', 'MIN(pp_price) AS minprice', 'MAX(pp_price) AS maxprice', 'SUM(pp_count) AS total_count', 'SUM(pp_buys) AS total_buys'],"1 group by pp_proid");
    
    $sosanpham = ProductAll(['COUNT(*) AS total_products']);
    $sotrang = ceil($sosanpham[0]['total_products'] / $page_size);
    

    if(isset($_SESSION['cate'])){
        if($_SESSION['cate']!=0){
            $listProducts = [];
            $proCat = ProCatAll(['pc_idpro'],'pc_idcat = '.$_SESSION['cate']);
            foreach($proCat as $pc){
                $pro = ProductFind("id = ".$pc['pc_idpro']);
                $listProducts[] = $pro;
            }
            $sotrang = count($listProducts);
            $listProducts = array_splice($listProducts, $offset, $page_size);
        }
    }else{
        $_SESSION['cate'] = 0;
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