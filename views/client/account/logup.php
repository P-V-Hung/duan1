<div class="signUp">
    <h2>Đăng ký</h2>

    <form action="" id="formSignUp" method="post">
        <div>
            <input type="text" placeholder="Tên đăng nhập" name="ten" id="user" class="mb20">
            <p class="err errUser">Ít nhất 6 kí tự gồm chữ cái và số</p>
        </div>
        <div>
            <input type="text" placeholder="Email" name="email" id="email" class="mb20">
            <p class="err errEmail">Email phải có đuôi '@gmail.com'</p>
        </div>
        <div>
            <input type="password" name="pass" id="pass" placeholder="Mật khẩu">
            <div class="icon icon1"><i class="fa-solid fa-eye"></i></div>
            <p class="err errPass">Ít nhất 8 kí tự gồm chữ cái, kí tự đặc biệt và số</p>
        </div>
        <div>
            <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu">
            <div class="icon icon2"><i class="fa-solid fa-eye"></i></div>
            <p class="err errRePass">Mật khẩu không trùng khớp</p>
        </div>
        <input type="submit" id="btn_sub" name="btn_signUp" value="Đăng ký">
    </form>
    <div class="more">
        Bạn đã có có tài khoản?
        <a href="<?=$clientUrl."login"?>">Đăng nhập</a>
    </div>
</div>
<script>
    function validate(input, error, condition, callback) {
        input.addEventListener('input', function() {
            let val = input.value;
            let check = condition(val);
            if (check) {
                error.style.color = "green";
            } else {
                error.style.color = "red";
            }
            callback(check);
        });
    }

    let checkUser = false;
    let checkEmail = false;
    let checkPass = false;
    let checkRepass = false;

    validate(document.querySelector("#user"), document.querySelector(".errUser"), function(value) {
        return /^[a-zA-Z0-9]{6,}$/.test(value);
    }, function(check) {
        checkUser = check;
    });

    validate(document.querySelector("#email"), document.querySelector(".errEmail"), function(value) {
        return /^[a-zA-Z0-9._-]+@gmail\.com$/.test(value);
    }, function(check) {
        checkEmail = check;
    });

    validate(document.querySelector("#pass"), document.querySelector(".errPass"), function(value) {
        return /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
    }, function(check) {
        checkPass = check;
    });

    let rePass = document.querySelector("#repass");
    let errRePass = document.querySelector(".errRePass");

    validate(rePass, errRePass, function() {
        return rePass.value === document.querySelector("#pass").value;
    }, function(check) {
        checkRepass = check;
    });

    // Ẩn hiện pass
    let inPass = document.querySelector("#pass");
    document.querySelector(".icon1").onclick = function() {
        if (inPass.type == "password") inPass.type = "text";
        else inPass.type = "password";
    }

    let inRePass = document.querySelector("#repass");
    document.querySelector(".icon2").onclick = function() {
        if (inRePass.type == "password") inRePass.type = "text";
        else inRePass.type = "password";
    }

    let formSignUp = document.querySelector("#formSignUp");
    formSignUp.onsubmit = function(e) {
        e.preventDefault();
        if (checkUser && checkEmail && checkPass && checkRepass) {
            formSignUp.submit();
        }
    }
</script>
=======

</script>