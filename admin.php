  <?php
    session_start();
    // Config
    require_once "./config/pdo.php";

    // Models
    require_once "./models/CategoryModel.php";
    require_once "./models/ProductModel.php";

    // Điều hướng
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
      case "product/list":{
        require_once $controller."product/list.php";
        break;
      }
      default:{
        echo "Loại";
        break;
      }
    }
    require_once $views."layout/footer.php";
  ?>