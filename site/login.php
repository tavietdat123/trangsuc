<?php 
require_once "../dao/user_dao.php";
session_start();
$rows = user_selectall();
 if(isset($_POST['check'])){
   $username_dn = $_POST['username_dn'];
   $password_dn = $_POST['password_dn'];
 foreach ($rows as $key => $value) {
   if(isset($username_dn) && isset($password_dn)){
       if($value['username'] == $username_dn && $value['password'] == $password_dn){
           if($value['role_id']== 1){
              $_SESSION['name']= $value['username'];
             header("location: index.php");
             break;
              
           }else{
            $_SESSION['admin']= $value['username'];
            header("location: ../admin/index.php");
           }
       }elseif(!($value['username'] == $username_dn) || !($value['password'] == $password_dn) ){
           $errormkall_dn = "Tài khoản hoặc mật khẩu không chính xác";
           
       }
   }
 }
   if($username_dn == ""){
       $errortk_dn = "Bạn cần nhập trường này";
   }
   if ($password_dn == "") {
       $errormk_dn = "Bạn cần nhập trường này";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
            <h4>Login to your account</h4>
        </div>
        <div class="login_form d-flex w-100 mt-4 pb-lg-5 flex-column">
            
            <form action="login.php" method="POST" class="">
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
                <a href="index.php" class="login_btn_gg btn mt-2"><i class="fa-brands fa-google"></i> Quay Lại Trang Chủ</a>
            <a class="login_forgot mt-4" href="">Forgot password?</a>
            <span class="mt-2 ">Dont have an account?<a class="login_btn_register " href="register.php"> Join free today</a></span>
            </div>
        </div>
    </div>
    </body>

</html>