<?php
if(isset($_POST['btn_signIn'])&&($_POST['btn_signIn'])){
    $tendn=$_POST['tendn'];
    $pass=$_POST['pass'];
     
    $user=AccountFind("u_username = '$tendn' or u_email = '$tendn' and u_password = '$pass'");
    if(empty($user)){
        logWarning("Tài khoản hoặc mật khẩu không chính xác!");
    }
    else if($user['u_status'] == 2){
        logError("Tài khoản này đã bị khóa");
    }else{
        $_SESSION['user'] = $user;
        setcookie("login", true, time() + 1);
        reUrlClient("/");
    }
}
    require_once $views."account/login.php";
?>