<?php
if(isset($_POST['btn_signIn'])&&($_POST['btn_signIn'])){
    $tendn=$_POST['tendn'];
    $pass=$_POST['pass'];
     
    $user=AccountFind("u_username like '%$tendn%' and u_password like '%$pass%'");
    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";
}
    require_once $views."account/login.php";
?>