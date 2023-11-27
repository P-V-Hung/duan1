  <?php
  session_start();

  if(!isset($_SESSION['user']) || $_SESSION['user']['u_role']!=1){
    header('Location: index.php');
  }

  // Config
  require_once "./config/pdo.php";
  require_once "./config/function.php";

    // Models
    require_once "./models/CategoryModel.php";
    require_once "./models/ProductModel.php";
    require_once "./models/VoucherModel.php";
    require_once "./models/AccountModel.php";
    require_once "./models/BillModel.php";
    require_once "./models/CommentModel.php";

  
  // Điều hướng
  $pathUpload = "./public/uploads/";
  $adminUrl = "/duan1/admin.php?url=";
  $views = "./views/admin/";
  $controller = "./controllers/admin/";

  require_once $views . "layout/header.php";
  $url = $_GET['url'] ?? '/';
  switch ($url) {
    case "/": {
        require_once $controller . "homepage/home.php";
        break;
      }
      // category
    case "category/list": {
        require_once $controller . "category/list.php";
        break;
      }
    case "category/update": {
        require_once $controller . "category/update.php";
        break;
      }
    case "category/add": {
        require_once $controller . "category/add.php";
        break;
      }
    case "category/delete": {
        require_once $controller . "category/delete.php";
        break;
      }
      // Products
    case "product/list": {
        require_once $controller . "product/list.php";
        break;
      }
    case "product/chitiet": {
        require_once $controller . "product/chitiet.php";
        break;
      }
    case "product/update": {
        require_once $controller . "product/update.php";
        break;
      }
    case "product/add": {
        require_once $controller . "product/add.php";
        break;
      }
    case "product/addpp": {
        require_once $controller . "product/addpp.php";
        break;
      }
    case "product/delete": {
        require_once $controller . "product/delete.php";
        break;
      }
    case "product/img/delete": {
        require_once $controller . "product/delete.php";
        break;
      }
    case "product/img/add": {
        require_once $controller . "product/addImg.php";
        break;
      }
    case "product/property/list": {
        require_once $controller . "product/property/list.php";
        break;
      }
    case "product/property/update": {
        require_once $controller . "product/property/update.php";
        break;
      }
    case "product/hotproduct": {
        require_once $controller . "product/hotProduct/listProduct.php";
        break;
      }
    case "product/hotproduct/add": {
        require_once $controller . "product/hotProduct/add.php";
        break;
      }
    case "product/hotproduct/delete": {
        require_once $controller . "product/hotProduct/delete.php";
        break;
      }
      // Voucher
      case "voucher/list":{
        require_once $controller."voucher/list.php";
        break;
      }
      case "voucher/delete":{
        require_once $controller."voucher/delete.php";
        break;
      }
      case "voucher/add":{
        require_once $controller."voucher/add.php";
        break;
      }

      // Account
      case "account/list":{
        require_once $controller."account/list.php";
        break;
      }
      case "account/add":{
        require_once $controller."account/add.php";
        break;
      }
      case "account/delete":{
        require_once $controller."account/delete.php";
        break;
      }
      case "account/update":{
        require_once $controller."account/update.php";
        break;
      }
      // Bill
      case "bill/list":{
        require_once $controller."bill/list.php";
        break;
      }
      case "billinfo":{
        require_once $controller."bill/billinfo.php";
        break;
      }
      case "bill/delete":{
        require_once $controller."bill/deletebill.php";
        break;
      }

    default: {
        echo "Loại";
        break;
      }
  }
  require_once $views . "layout/footer.php";
  ?>
  