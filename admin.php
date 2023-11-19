  <?php
    session_start();
    // Config
    require_once "./config/pdo.php";

    // Models
    require_once "./models/CategoryModel.php";
    require_once "./models/ProductModel.php";

    // Điều hướng
    $pathUpload = "./public/uploads/";
    $adminUrl = "/duan1/admin.php?url=";
    $views = "./views/admin/";
    $controller = "./controllers/admin/";

    require_once $views."layout/header.php";
    $url = $_GET['url'] ?? '/';
    switch($url){
      case "/":{
        require_once $views."homepage/home.php";
        break;
      }
      // category
      case "category/list":{
        require_once $controller."category/list.php";
        break;
      }
      case "category/update":{
        require_once $controller."category/update.php";
        break;
      }
      case "category/add":{
        require_once $controller."category/add.php";
        break;
      }
      case "category/delete":{
        require_once $controller."category/delete.php";
        break;
      }
      // Products
      case "product/list":{
        require_once $controller."product/list.php";
        break;
      }
      case "product/chitiet":{
        require_once $controller."product/chitiet.php";
        break;
      }
      case "product/update":{
        require_once $controller."product/update.php";
        break;
      }
      case "product/add":{
        require_once $controller."product/add.php";
        break;
      }
      case "product/addpp":{
        require_once $controller."product/addpp.php";
        break;
      }
      case "product/delete":{
        require_once $controller."product/delete.php";
        break;
      }
      case "product/property/list":{
        require_once $controller."product/property/list.php";
        break;
      }
      case "product/property/update":{
        require_once $controller."product/property/update.php";
        break;
      }
      default:{
        echo "Loại";
        break;
      }
    }
    require_once $views."layout/footer.php";
  ?>
  