<?php
    $listProducts = ProductAll();
    if(isset($_POST['btn-search'])){
        $keyword = $_POST['keyword'];
        $catId = $_POST['cat'];
        if($catId==0){
            if($keyword == ''){
                $listProducts = ProductAll(['*']);
                $keyword = "Tất cả";
            }else{
                $listProducts = ProductAll(['*'],"pro_name like '%".$keyword."%'");
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
        }
    }
    if(isset($_POST['btn-all'])){
        $listProducts = ProductAll();
    }
    $listPP = PPAll(['pp_proid','MIN(pp_price) AS minprice','MAX(pp_price) AS maxprice','SUM(pp_count) AS total_count','SUM(pp_buys) AS total_buys'],"1 group by pp_proid");
    
    $listCat = CategoryAll(['*']);
    require $views."product/list.php";
?>
