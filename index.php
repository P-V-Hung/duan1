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
    require_once "./models/VoucherModel.php";
    require_once "./models/CommentModel.php";


    // router
    $clientUrl = '/?url=';
    $pathUpload = "./public/uploads/";
    $views = "./views/client/";
    $controllers = "./controllers/client/";
    

    require_once $views . "layout/header.php";
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
        case 'bill/add' : {
            require_once $controllers."bill/addbill.php";
            break;
        }
        case 'bill/list' : {
            require_once $controllers."bill/listbill.php";
            break;
        }
        case 'bill/delete' : {
            require_once $controllers."bill/deletebill.php";
            break;
        }
        case 'billinfo' : {
            require_once $controllers."bill/billInfo.php";
            break;
        }
    }
    require_once "./views/client/layout/footer.php";
?>