<?php
    session_start();

    // pdo
    require_once "./config/pdo.php";


    //model 
    require_once "./models/CategoryModel.php";
    require_once "./models/ProductModel.php";


    // router
    $clientUrl = '/?url=';
    $pathUpload = "./public/uploads/";
    $views = "./views/client/";
    $controllers = "./controllers/client/";
    

    require_once "./views/client/layout/header.php";
    $url = $_GET['url'] ?? '/';
    switch($url){
        case '/' : {
            require_once $controllers."homepage/home.php";
            break;
        }
        case 'chitietsp' : {
            require_once $controllers."product/chitietsp.php";
            break;
        }
    }
    // require_once "./client/chitietsp.php";
    // require_once "./client/product.php";
    // require_once "./client/userInfo.php";
    // require_once "./client/editInfor.php";
    // require_once "./views/client/thanhtoan.php";
    // require_once "./client/cart.php";
    // require_once "./client/formSignin.php";
    // require_once "./client/formSignup.php";
    require_once "./views/client/layout/footer.php";
?>