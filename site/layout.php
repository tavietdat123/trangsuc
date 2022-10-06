<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/content/lib/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="/content/css/style.css">
</head>
<body>
    <div class="drop-shadow container-fluid ">
        <div class="container p-0">
            <header>
                <div class="header__logo d-flex justify-content-between align-items-center">
                    <div class="contact">
                        <ul class="logo__list d-flex">
                            <li class="logo__item"><a class="logo__link" href=""><img src="https://cdn.pnj.io/images/image-update/layout/icon-relationship-new.svg" alt=""><span class="logo__text">Quan hệ cổ đông</span></a></li>
                            <li class="logo__item"><a class="logo__link" href="https://goo.gl/maps/dfQDF4H3aH7vK4ue9"><img src="https://cdn.pnj.io/images/image-update/layout/icon-stores-new.svg" alt=""><span class="logo__text">Cửa hàng</span></a></li>
                            <li class="logo__item"><a class="logo__link" href="tel:+1800545457"><img src="https://cdn.pnj.io/images/image-update/layout/icon-hotline-new.svg" alt=""><span class="logo__text-hotline">1800 54 54 57</span></a></li>
                        </ul>
                    </div>
                    <div>
                        <a href="/home.php"><img class="logo__img" src="/assets/img/pnj.com 1.png" alt=""></a>
                    </div>
                    <div class="function">
                        <ul class="logo__list d-flex">
                        <?php  if(isset($_SESSION['name'])): ?>
                
                <!-- Đã Đăng nhập -->


                <li class="logo__item logo__item_user d-flex align-items-center">
                    <div class="me-2">
                  <img class="logo_item_avt"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLhlPE0gXGOoAq3qU3GHKSS2Ih3VQDLzZ6GQ&usqp=CAU"
                    alt=""
                  /></div><div>
                    <span class="logo__text_user register"><?=$user['name']?></span>
                  </div>
                  <div class="control_user">
                    <div class="control_user_list">
                        <div class="control_user_item"><a class="control_user_link" href="">Tài Khoản</a> </div>
                        <div class="control_user_item"><a class="control_user_link" href="">Cài đặt</a> </div>
                        <div class="control_user_item"><a class="control_user_link" href="">Giở hàng</a> </div>
                        <div class="control_user_item"><a class="control_user_link" href="logout.php">Đăng xuất</a> </div>
                    </div>
                  </div>
                </li>
                <?php endif; ?>
                  <?php if(!isset($_SESSION['name'])): ?>
                    <li class="logo__item">
                  <a class="logo__link" href="/login.php"
                    ><span class="logo__text login">Đăng nhập</span></a
                  >
                </li>
                <li class="logo__item">
                  <a class="logo__link" href="/register.php"
                    ><span class="logo__text register">Đăng kí</span></a
                  >
                </li>
                <?php endif ?>
                            <li class="logo__item"><a class="logo__link" href="/cart.php"><img src="https://cdn.pnj.io/images/image-update/layout/icon-cart-new.svg" alt=""><span class="logo__text">Giỏ Hàng</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__nav d-flex align-items-center justify-content-between">
                    <div class="nav">
                        <ul class="nav__list d-flex">
                            <li class="nav__item"><a href="/home.php" class="nav__link ">Trang chủ</a></li>
                            <li class="nav__item"><a href="/introduce.php" class="nav__link ">Liên Hệ</a></li>
                            <li class="nav__item"><a href="/product.php" class="nav__link active">Sản Phẩm</a></li>
                            <li class="nav__item"><a href="/promotion.php" class="nav__link orange">Khuyến Mãi</a></li>
                        </ul>
                    </div>
                    <div class="form__search ">
                        <form action="" class=" d-flex">
                            <input type="text" placeholder="Tìm Kiếm Nhanh" class="form__search_input" required>
                            <button class="form__search_btn">
                                <i class="fas fa-search"></i>
                            </button>

                        </form>
                    </div>
                </div>
            </header>
        </div>
    </div>
   <div class="mt-105">
    

   </div>

    <div class="container-fluid">
        <div class="footer">
            <div class="footer_logo d-flex justify-content-center mt-5 mb-5">
                <img src="/assets/img/pnj.com 1.png" alt="">
            </div>
            <div class="row footer_list">
                <div class="col-3 footer_item text-center">
                    <div class="footer_heading">
                        <h5>
                            © 2017 Công Ty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận
                        </h5>
                    </div>
                    <div class="footer_content">
                        <div><span>170E Phan Đăng Lưu, P.3, Q.Phú Nhuận, TP.Hồ Chí Minh</span></div>
                        <div><span>ĐT: <a href="">028 39951703</a> - Fax: <a href="">028 3995 1702</a></span></div>
                        <div> <span>Giấy chứng nhận đăng ký doanh nghiệp: <a href="">0300521758</a>.</span></div>
                        <div><span>Tổng đài hỗ trợ (08:00-21:00, miễn phí gọi)</span></div>
                        <div><span>Gọi mua: <a href="">1800545457</a> (phím 1)</span></div>
                        <div><span>Khiếu nại: <a href="">1800545457</a> (phím 2)</span></div>
                    </div>
                </div>
                <div class="col-3 footer_item text-center">
                    <div class="footer_heading">
                        <h5>
                            Về PNJ
                        </h5>
                    </div>
                    <div class="footer_content">
                        <div><span>Câu chuyện PNJ</span></div>
                        <div><span>ĐT:Tuyển dụng</span></div>
                        <div> <span>Xuất khẩu</span></div>
                        <div><span>Kinh doanh sỉ</span></div>
                        <div><span>Kiểm định kim cương</span></div>
                        <div><span>Kinh doanh vàng miếng</span></div>
                    </div>
                </div>
                <div class="col-3 footer_item text-center">
                    <div class="footer_heading">
                        <h5>
                            Dịch vụ khách hàng
                        </h5>
                    </div>
                    <div class="footer_content">
                        <div><span>Hướng dẫn đo size trang sức</span></div>
                        <div><span>Mua hàng trả góp</span></div>
                        <div> <span>Hướng dẫn mua hàng và thanh toán </span></div>
                        <div><span>Chính sách hoàn tiền</span></div>
                        <div><span>Chính sách giao hàng</span></div>
                        <div><span>Cẩm nang sử dụng trang sức</span></div>
                    </div>
                </div>
                <div class="col-3 footer_item text-center">
                    <div class="footer_heading">
                        <h5>
                            KẾT NỐI VỚI CHÚNG TÔI
                        </h5>
                    </div>
                    <div class="footer_content mt-2">
                        <span><a href=""><img src="https://cdn.pnj.io/images/image-update/footer/facebook.svg" alt=""></a></span>
                        <span><a href=""><img src="https://cdn.pnj.io/images/image-update/footer/instagram.svg" alt=""></a></span>
                        <span><a href=""><img src="https://cdn.pnj.io/images/image-update/footer/youtube.svg" alt=""></a></span>
                        <span><a href=""><img src="https://cdn.pnj.io/images/image-update/footer/email.svg" alt=""></a></span>
                    </div>
                    <div class="footer_heading mt-5">
                        <h5>
                            PHƯƠNG THỨC THANH TOÁN
                        </h5>
                    </div>
                    <div class="footer_content mt-2">
                        <span><a href=""><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/visa.svg" alt=""></a></span>
                        <span><a href=""><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/mastercard.svg" alt=""></a></span>
                        <span><a href=""><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/jcb.svg" alt=""></a></span>
                        <span><a href=""><img src="https://www.pnj.com.vn/design/themes/pnjrovski/media/images/payments/thanhtoantienmat.svg" alt=""></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 mt-5 footer_end1 text-center">
        <span class="footer_end">© 2017 Công Ty Cổ Phần Vàng Bạc Đá Quý Phú Nhuận</span>
    </div>
    <div class="container_contact_fix">
        <div class="contact_fix">
            <img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-hotro-2.svg" alt="">
        </div>
        <div class="contact_all">
            <div class="contact_item">
                <a href="facebook.com/login" class="d-block"><img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-facebook.svg" alt=""></a>
            </div>
            <div class="contact_item">
                <a href="" class="d-block"><img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-hotline.svg" alt=""></a>
            </div>
            <div class="contact_item">
                <a href="" class="d-block"><img src="https://cdn.pnj.io/images/image-update/appointment-sale/icon-booking-circle.svg" alt=""></a>
            </div>
            <div class="contact_item">
                <a href="" class="d-block"><img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-zalo.svg" alt=""></a>
            </div>
            <div class="contact_item contact_item_close d-flex justify-content-center align-items-center">
                <img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-cancle.png" alt="">
            </div>
        </div>
    </div>
    <script src="/js/contact.js"></script>
</body>

</html>