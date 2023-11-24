<?php
if(isset($_POST['btn_signUp'])&&($_POST['btn_signUp'])){
    $ten=$_POST['ten'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $data=[
        'u_username'=>$ten,
        'u_email'=>$email,
        'u_passwword'=>$pass
    ];
    AccountInsert($data);
}

    require_once $views."account/logup.php";
