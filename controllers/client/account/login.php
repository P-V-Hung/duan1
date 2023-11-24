<?php
if(isset($_POST['btn_signIn'])&&($_POST['btn_signIn'])){
    $tendn=$_POST['tendn'];
    $pass=$_POST['pass'];
     
    $user=AccountFind("u_username like '%$tendn%' and u_password like '%$pass%'");
    if($user['u_status'] == 1){
        logError("Tài khoản này đã bị khóa");
    }else{
        $_SESSION['user'] = $user;
        setcookie("login", true, time() + 1);
        reUrlClient("/");
    }
}
    require_once $views."account/login.php";
?>