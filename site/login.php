
    <div class="container-fluid d-flex login_container  justify-content-center flex-column  align-items-center  ">
        <div class="logo_login mb-2 pe-4">
            <img src="/content/img/pnj.com 1.png" alt="">
        </div>
        <div class="login_heading text-center">
            <h5>Chào Mừng Đến Với PNJ</h5>
            <h4>Login to your account</h4>
        </div>
        <div class="login_form d-flex w-100 mt-4 pb-lg-5 flex-column">
            
            <form action="index.php?login" method="POST" class="">
                <div class="">
                    <label for="">Tài khoản</label></div>
                    <div>
                    <input  class="login_input mb-1 mt-2" name="username_dn" value="<?php if(isset($username_dn)){echo$username_dn;} ?>" placeholder="John@gamil.snow" type="text"></div>
                    <span  style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errortk_dn)){echo$errortk_dn;} ?></span>
                
                <div class="">
                    <label class="mt-2" for="">Mật Khẩu</label></div>
                    <div>
                    <input class="login_input mb-1 mt-2" name="password_dn" placeholder="************" value="<?php if(isset($password_dn)){echo$password_dn;} ?>" type="password"></div>
                    <span  style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errormk_dn)){echo$errormk_dn;}elseif(isset($errormkall_dn)){echo$errormkall_dn;} ?></span>
                <button type="submit" name="check" class="login_btn btn mt-4">Login Now</button>

            </form>
            <div class="login_control d-flex flex-column text-center">
                <a href="" class="login_btn_gg btn mt-2"><i class="fa-brands fa-google"></i> Hoặc đăng nhập với google</a>
            <a class="login_forgot mt-4" href="">Forgot password?</a>
            <span class="mt-2 ">Dont have an account?<a class="login_btn_register " href="index.php?register"> Join free today</a></span>
            </div>
        </div>
    </div>