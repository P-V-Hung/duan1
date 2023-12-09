<?php
    $page_size = $_GET['size'] ?? 8;
    $page_current = $_GET['page'] ?? 1;
    $offset = ($page_current - 1) * $page_size;

    $listProducts = ProductAll(['*'],"1 LIMIT $page_size OFFSET $offset");

    $sosanpham = ProductAll(['COUNT(*) AS total_products']);
    $sotrang = ceil($sosanpham[0]['total_products'] / $page_size);

    if(isset($_POST['btn-search'])){
        $keyword = $_POST['keyword'];
        $catId = $_POST['cat'];
        if($catId==0){
            if($keyword == ''){
                $listProducts = ProductAll(['*'],"1 LIMIT $page_size OFFSET $offset");
                $keyword = "Tất cả";
            }else{
                $listProducts = ProductAll(['*'],"pro_name like '%".$keyword."%' LIMIT $page_size OFFSET $offset");
            }
        }else{
            $listProducts = [];
            $category = CategoryFind("id = ".$catId);
            if($keyword ==''){
                $listProId = ProCatAll(['*'],"pc_idcat = $catId");
                foreach($listProId as $proId){
                    $pro = ProductFind('id = '.$proId['pc_idpro']);
                    $listProducts[] = $pro;
                    $keyword = "Tất cả sản phẩm của danh mục ".$category['cat_name'];
                }
            }else{
                $listProId = ProCatAll(['*'],"pc_idcat = $catId");
                foreach($listProId as $proId){
                    $pro = ProductFind('id = '.$proId['pc_idpro']." and pro_name like '%$keyword%'");
                    $listProducts[] = $pro;
                    $keyword = "$keyword của danh mục ".$category['cat_name'];
                }
            }
            $sotrang = ceil(count($listProducts)/$page_size); 
            $listProducts = array_splice($listProducts, $offset, $page_size);
        }
    }
    if(isset($_POST['btn-all'])){
        $listProducts = ProductAll(['*'],"1 LIMIT $page_size OFFSET $offset");
    }
    $listPP = PPAll(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"1 group by pp_proid");
    
    $listCat = CategoryAll(['*']);
    require $views."product/list.php";
?>
