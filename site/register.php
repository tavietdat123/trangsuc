<?php
require_once "../dao/user_dao.php";

$rows = user_selectall();
 if(isset($_POST['check'])){
  $username_dk = $_POST['username_dk'];
  $emailphone_dk = $_POST['emailphone_dk'];
  $password_dk = $_POST['password_dk'];
  $re_password_dk = $_POST['re_password_dk'];
  $role = 1;

$checktk=0;
foreach ($rows as $key => $value) {
    if(isset($emailphone_dk)){
   if($value['username'] == $emailphone_dk){
    $checktk = 1;
   }}
}
     if($username_dk == "") {
    $errortk= "Bạn chưa nhập tên";
 }
            if($emailphone_dk == "") {
                $errorem = "Bạn chưa nhập tên đăng nhập";
            }elseif($checktk == 1){
                $errorem="Tên đăng nhập đã tồn tại";
                     } 
            if($password_dk == "") {
                $errormk = "Bạn chưa nhập Mật khẩu";
            }elseif(strlen($password_dk) < 6){
                $errormk ="Mật khẩu ít nhất 6 kí tự";
            }
                if($re_password_dk == "") {
                    $errorremk =  "Nhập lại mật khẩu không trùng khớp";
                }elseif(!($re_password_dk == $password_dk)){
                    $errorremk =  "Nhập lại mật khẩu không trùng khớp";
                }
if(!isset($errortk) && !isset($errorem) && !isset($errormk)&& !isset($errorremk)){
    user_insert($emailphone_dk, $password_dk, $username_dk, $role);
    header("location: login.php");

}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí</title>
    <link rel="shortcut icon" href="/content/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/content/lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/content/css/style.css">
</head>
<body>
<div class="container-fluid d-flex login_container  justify-content-center flex-column  align-items-center  ">
        <div class="logo_login mb-2 pe-4">
            <img src="/content/img/pnj.com 1.png" alt="">
        </div>
        <div class="login_heading text-center">
            <h5>Chào Mừng Đến Với PNJ</h5>
            <h4>Create Account</h4>
        </div>
        <div class="login_form d-flex w-100 mt-4  flex-column">
            
            <form action="register.php" method="POST" class="">


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
                <a href="index.php" class="login_btn_gg btn mt-2"><i class="fa-brands fa-google"></i> Quay Lại Trang Chủ</a>
            <a class="login_forgot mt-4" href="">Quên Mật Khẩu?</a>
            <span class="mt-2 ">have an account?<a class="login_btn_register " href="login.php"> log in now</a></span>
            </div>
        </div>
        

    </div>
    </body>

</html>