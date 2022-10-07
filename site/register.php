<div class="container-fluid d-flex login_container  justify-content-center flex-column  align-items-center  ">
        <div class="logo_login mb-2 pe-4">
            <img src="/content/img/pnj.com 1.png" alt="">
        </div>
        <div class="login_heading text-center">
            <h5>Chào Mừng Đến Với PNJ</h5>
            <h4>Create Account</h4>
        </div>
        <div class="login_form d-flex w-100 mt-4  flex-column">
            
            <form action="index.php?register" method="POST" class="">


            <div class="">
                    <label  for="">Tên Đăng Nhập</label></div>
                    <div>
                    <input  class="login_input mt-2" name="emailphone_dk" value="<?php if(isset($emailphone_dk)){echo$emailphone_dk;}?>" placeholder="Johnsnow" type="text"></div>
                    <span style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errorem)){echo$errorem;} ?></span>

            <div class="">
                        <label class="mt-2" for="">Tên Người Dùng</label></div>
                        <div>
                        <input  class="login_input mt-2" name='username_dk' value="<?php if(isset($username_dk)){echo$username_dk;}?>" placeholder="John snow" type="text"></div>
                    <span style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errortk)){echo$errortk;} ?></span>
                        <div class="">
                            <label class="mt-2" for="">Mật khẩu</label></div>
                            <div>
                            <input  class="login_input mt-2" name="password_dk" value="<?php if(isset($password_dk)){echo$password_dk;}?>" placeholder="************" type="password"></div>
                    <span style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errormk)){echo$errormk;} ?></span>

                        
                        <div class="">
                    <label class="mt-2" for="">Nhập Lại Mật Khẩu</label></div>
                    <div>
                    <input class="login_input mt-2" name="re_password_dk" value="<?php if(isset($re_password_dk)){echo$re_password_dk;}?>" placeholder="************" type="password"></div>
                    <span style="color: red; font-size: 12px; font-weight: 300"><?php if(isset($errorremk)){echo$errorremk;} ?></span>

                <button type="submit" name="check" class="login_btn btn mt-4">Đăng Kí</button>

            </form>
            <div class="login_control d-flex flex-column text-center">
                <a href="" class="login_btn_gg btn mt-2"><i class="fa-brands fa-google"></i> Đăng nhập với google</a>
            <a class="login_forgot mt-4" href="">Quên Mật Khẩu?</a>
            <span class="mt-2 ">have an account?<a class="login_btn_register " href="index.php?login"> log in now</a></span>
            </div>
        </div>
        

    </div>