<?php
if (isset($_POST['btn_signUp']) && ($_POST['btn_signUp'])) {
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (empty($ten) || empty($email) || empty($pass)) {
        logWarning("Vui lòng nhập đầy đủ thông tin!");
    } else {
        $user = AccountFind("u_email like '%$email%' OR u_username like '%$ten%'");
        if (!empty($user)) {
            logError("Tên đăng nhập hoặc email đã tồn tại!");
        } else {
            $data = [
                'u_username' => $ten,
                'u_email' => $email,
                'u_password' => $pass,
                'u_create' => date('Y-m-d')
            ];
            AccountInsert($data);
            setcookie("logup", true, time() + 1);
            reUrlClient('login');
        }
    }
}
require_once $views . "account/logup.php";
