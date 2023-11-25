<?php
    session_start();
    
    // pdo
    require_once "./config/pdo.php";
    require_once "./config/function.php";


    //model 
    require_once "./models/CategoryModel.php";
    require_once "./models/ProductModel.php";
    require_once "./models/AccountModel.php";
    require_once "./models/BillModel.php";
    require_once "./models/CommentModel.php";


    // router
    $clientUrl = '/duan1/?url=';
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
        case 'product' : {
            require_once $controllers."product/product.php";
            break;
        }
        case 'chitietsp' : {
            require_once $controllers."product/chitietsp.php";
            break;
        }
        case 'comment/delete' : {
            require_once $controllers."product/comdelete.php";
            break;
        }
        case 'cart' : {
            require_once $controllers."cart/cart.php";
            break;
        }
        case 'cart/delete' : {
            require_once $controllers."cart/delete.php";
        }
        case 'login' : {
            require_once $controllers."account/login.php";
            break;
        }
        case 'logup' : {
            require_once $controllers."account/logup.php";
            break;
        }
        case 'userInfor' : {
            require_once $controllers."account/userInfor.php";
            break;
        }
        case 'editInfor' : {
            require_once $controllers."account/editInfor.php";
            break;
        }
        case 'changePass' : {
            require_once $controllers."account/changePass.php";
            break;
        }
    }
    // require_once "./client/chitietsp.php";
    // require_once "./client/product.php";
    // require_once "./client/userInfo.php";
    // require_once "./client/editInfor.php";
    // require_once "./client/cart.php";
    // require_once "./client/formSignin.php";
    // require_once "./client/formSignup.php";
    require_once "./views/client/layout/footer.php";
?>