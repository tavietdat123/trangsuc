<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../content/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../content/lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../content/css/style_admin.css">
    <title><?=$TITLE_NAME?></title>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="nav d-flex flex-column">
            <div class="logo d-flex justify-content-center mt-2 pe-2">
<img src="/content/img/Untitled-2.png" alt="">
            </div>
            <div class="nav_heading mt-3">
                <h5>Quản Trị</h5>
            </div>
            <div class="nav_list">
                <div class="nav_item"><a href="index.php" class="nav_link <?php if(strlen(strstr($VIEW_NAME, "admin"))){echo"active";}?>">Tổng Quan</a></div>
                
                <div class="nav_item"><a href="index.php?product" class="nav_link <?php if(strlen(strstr($VIEW_NAME, "product"))){echo"active";}?>">Sản phẩm</a></div>
                <div class="nav_item"><a href="index.php?categories" class="nav_link <?php if(strlen(strstr($VIEW_NAME, "categor"))){echo"active";}?>">Danh Mục</a></div>
                <div class="nav_item"><a href="index.php?users" class="nav_link <?php if(strlen(strstr($VIEW_NAME, "user"))){echo"active";}?>">Khách Hàng</a></div>
                <div class="nav_item"><a href="" class="nav_link">Khuyến Mãi</a></div>
                <div class="nav_item"><a href="" class="nav_link">Báo Cáo</a></div>

            </div>
            <div class="nav_setting mt-auto" >
                <a href="/site/index.php"><i class="fa-solid fa-arrow-left"></i> Quay Về trang web</a>

            </div>
        </div>
        <div class="content">
            <div class="content_header">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Nhập từ kháo tìm kiếm ...">
                </div>
                <div class="notification d-flex align-items-center">
                    <i class="fa-sharp fa-solid fa-bell"></i>
                    <span>Thông Báo</span>
                </div>
                <div class="user d-flex align-items-center">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwJoaqh-Ehrbg2Qf6Nk_XiblTuvyyiOwsc2g&usqp=CAU" alt="">
               <span>Admin</span>
               <div class="control_user_list">
                <div class="control_user_item"><a class="control_user_link" href="">Tài Khoản</a> </div>
                <div class="control_user_item"><a class="control_user_link" href="">Cài đặt</a> </div>
                <div class="control_user_item"><a class="control_user_link" href="logout_admin.php">Đăng xuất</a> </div>
              </div>
                </div>
            </div>
            <div class="content_container">
               <?php include_once $VIEW_NAME?>
            </div>
        </div>
    </div>
</body>
</html>