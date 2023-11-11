<div class="signUp">
    <h2>Đăng ký</h2>
    <form action="">
        <div><input type="text" placeholder="Tên đăng nhập" id="user" class="mb20">
        <p class="errUser">Chỉ chữ và số dài 8 kí tự</p>    
    </div>
        <div><input type="text" placeholder="Email" id="email" class="mb20">
inkfz    </div>
        <div><input type="password" id="pass" placeholder="Mật khẩu"><div class="icon"><i class="fa-solid fa-eye"></i></div></div>
        <div><input type="password" id="repass" placeholder="Nhập lại mật khẩu"><div class="icon"><i class="fa-solid fa-eye"></i></div></div>
        <input type="submit" name="btn_signUp" value="Đăng ký">
    </form>
    <div class="more">
        Bạn đã có có tài khoản? 
        <a href="#">Đăng nhập</a>
    </div>
</div>
<script>
    function validate(input,error){
        input.addEventListener('input',function(){
        let val = input.value;
        if(/^[a-zA-Z0-9]{8,}$/.test(val)){
            error.style.color = "green";

        }else{
            error.style.color = "red";
        }
        });
    }

    let username = document.querySelector("#user");
    let errUser = document.querySelector(".errUser");
    let pass = document.querySelector("#pass");

    validate(username,errUser);

    
</script>