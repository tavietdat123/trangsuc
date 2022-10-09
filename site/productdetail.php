<?php
$id = $_GET['id']; 
$detail = detail_select_one($id);
$product = pro_select_one($id);
$id_product = $product['category_id'];
$ctgr =  pro_select_id_ctgr($id_product);
if(isset($_SESSION['name'])){
$username = $_SESSION['name'];
$user = user_selectusername($username);
}
?>
<div class="container p-0">
<div class="detail_load text-center">
    <span> <a class="detail_load_link1" href="/home.php">Trang chủ</a> / <a class="detail_load_link1" href="/product.php">Bông Tai</a> / <a class="detail_load_link2" href=""><?= $product['name']?></a></span>
</div>
<div class="detail_container d-flex justify-content-center">
    <div class="detail_container_list_img">
        <div class="detail_container_item_img active mb-2"><img src="/content/img/<?=$detail['image1']?>" alt=""></div>
        <div class="detail_container_item_img mb-2"><img src="/content/img/<?=$detail['image2']?>" alt=""></div>
        <div class="detail_container_item_img"><img src="/content/img/<?=$detail['image3']?>" alt=""></div>
    </div>
    <div class="detail_img_main">
        <img src="/content/img/<?=$detail['image1']?>" alt="">
    </div>
    <div class="detail_content ">
        <div class="detail_content_title">
<h5><?= $product['name']?></h5>
        </div>
        <div class="detail_content_origin d-flex justify-content-between mt-2">
            <span><?= $product['origin']?></span>
            <span><?= $product['quantity']?>+ sp</span>
        </div>
        <div class="detail_content_price mt-1"><span><?= $product['price']?> đ</span></div>
        <div class="detail_stocking mt-1"><span><?php if($product['quantity'] <= 0){ echo"Hết Hàng";}else{echo"Còn Hàng";}?></span></div>
        <div class="detail_content_endow mt-1">
            <p class="title">
                Ưu Đãi:
            </p>
            <div class="detail_content_endow_option">
                <span><i class="fa-solid fa-circle-check"></i> Nhập mã <strong>QRPAYPNJ</strong>  giảm đến 499k khi thanh toán <a href="">VNPAY-QR</a></span>
            </div>
        </div>
        <a href="<?php if(isset($_SESSION['name'])){echo"addcart.php?id=$id";}
            else{
              echo"login.php";}?>" class="detail_btn_buy btn d-flex flex-column mt-2">
            <span class="buy">Mua Hàng</span>
            <span class="ship">Miễn phí giao hàng tận nhà hoặc nhận tại cửa hàng</span>
        </a>
        <div class="detail_btn_buy_method d-flex justify-content-between mt-2">
            <a href="<?php if(isset($_SESSION['name'])){echo"addcart.php?id=$id";}
            else{
              echo"login.php";}?>" class="btn">MUA TRẢ GÓP</a>
            <a href="<?php if(isset($_SESSION['name'])){echo"addcart.php?id=$id";}
            else{
              echo"login.php";}?>"   class="btn">Thêm vào giỏ hàng</a>
        </div>
        <div class="detail_advise mt-3 text-center d-flex flex-column">
            <span>Tư vấn ngay: <a class="detail_advise_link" href="tel:1800-545457">1800-545457</a> (miễn phí)</span>
            <span class="mt-1">hoặc qua 
                <a href=""><img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-zalo.svg" alt=""></a>
                <a href=""><img src="https://cdn.pnj.io/images/image-update/2021/hotline/icon-facebook.svg" alt=""></a>
            </span>
        </div>
        <div class="detail_policy d-flex flex-column mt-2">
            <span><i class="fa-solid fa-circle-check"></i> Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá</span>
            <span><i class="fa-solid fa-circle-check"></i> Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</span>
            <span><i class="fa-solid fa-circle-check"></i> Miễn phí giao nhanh Toàn Quốc 1-7 ngày</span>
        </div>
    </div>
</div>

<div class="parameter_boder">
<div class="parameter">
    <div class="parameter_heading">
    <h5>Thông số</h5>
    </div>
    <div class="parameter_content">
      <p class="parameter_item">
        Trọng Lực : 
        <span><?php if(isset($detail['weight'])){ echo$detail['weight'];}else{echo" ";}?></span> phân
      </p>
      <p class="parameter_item">
        Loại Đá :
        <span><?php if(isset($detail['typeofstone'])){ echo$detail['typeofstone'];}else{echo" ";}?></span>
      </p>
      <p class="parameter_item">
        Hình Dạng : 
        <span><?php if(isset($detail['format'])){ echo$detail['format'];}else{echo" ";}?></span>
      </p>
      
      
    </div>
  </div>
  <div class="description">
    <div class="parameter_heading">
        <h5>Mô Tả</h5>
        </div>
    <p class="parameter_item"><?php if(isset($detail['description'])){ echo$detail['description'];}else{echo" ";}?></p>
  </div>
</div>
<div class="home_product_trending m-80">
    <div class="home_trending_heading d-flex justify-content-between">
      <h2>Sản Phẩm Liên Quan</h2>
      <a href="index.php?product" class="btn text-decoration-underline"
        >Xem thêm</a
      >
    </div>
    <div class="home_product_trending1">
      <div class="overflow-hidden">
        <div class="product_trending_list d-flex">
<?php foreach ($ctgr as $key => $value):?>
          <div class="product_trending_item">
            <a
              href="index.php?productdetail&id=<?=$value['id'] ?>"
              class="product_trending_link d-flex flex-column"
            >
              <div
                class="product_trending_img"
                style="
                  background-image: url('/content/img/<?=$value['image']?>');
                "
              ></div>
              <div class="p-2">
                <h4 class="product_trending_heading">
                <?=$value['name']?>
                </h4>
                <span
                  class="product_trending_price d-flex justify-content-center mb-4"
                  ><?=$value['price']?> đ</span
                >
                <div class="d-flex justify-content-between">
                  <span class="product_trending_origin"><?=$value['origin']?></span>
                  <span class="product_trending_sold"><?=$value['quantity']?>+ sp</span>
                </div>
              </div>
            </a>
          </div>
<?php endforeach ; ?>
        </div>
      </div>
      <div class="product_trending_prev">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
      <div class="product_trending_next">
        <i class="fa-solid fa-chevron-right"></i>
      </div>
    </div>
  </div>
</div>
<script src="/content/js/detail.js"></script>