<div class="container_slide">
    <div class="slider container-fluid p-0">
      <div class="slide__img">
        <img src="https://cdn.pnj.io/images/promo/140/pnvn-1972x640_cta.jpg" alt="" />
      </div>
      <div class="slide__img">
        <img src="https://cdn.pnj.io/images/promo/138/Cuoi_Retail__truelove_-_banners_1972x640CTA.jpg" alt="" />
      </div>
      <div class="slide__img">
        <img src="https://cdn.pnj.io/images/promo/138/banner_tabsale_t9_chung_1972x640CTA.jpg" alt="" />
      </div>
      <div class="slide__img">
        <img src="https://cdn.pnj.io/images/promo/138/maldives_adapt_1972x640CTA.jpg" alt="" />
      </div>
    </div>
    <div class="btn_next_slide"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="btn_prev_slide">
      <i class="fa-solid fa-chevron-right"></i>
    </div>
  </div>
  <div class="slider1 container-fluid p-0 d-flex justify-content-between mt-3">
    <div class="slider1__img">
      <img src="https://cdn.pnj.io/images/promo/139/LDP_-_banner_Disney_materials_button_494x247CTA.jpg" alt="" />
    </div>
    <div class="slider1__img">
      <img src="https://cdn.pnj.io/images/promo/139/12-lp-style-retail_494x247_CTA.jpg" alt="" />
    </div>
    <div class="slider1__img">
      <img src="https://cdn.pnj.io/images/promo/138/udcbt9-494x247-CTA.jpg" alt="" />
    </div>
  </div>
  <div class="content_home container p-0">
    <div class="home_trending">
      <div class="home_trending_heading">
        <h2>Xu Hướng Tìm Kiếm</h2>
      </div>
      <div class="container_slide_trending">
        <div class="home_trending_list d-flex">
          <div class="home_trending_item">
<<<<<<< Updated upstream
            <a class="home_trending_link" href="../site/product.php"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/lac-vong-tay.png" alt="" /><span class="home_trending_item_text">Lắc-Vòng tay vàng</span></a>
=======
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/lac-vong-tay.png" alt="" /><span class="home_trending_item_text">Lắc-Vòng tay vàng</span></a>
>>>>>>> Stashed changes
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/day-chuyen-bac.png" alt="" /><span class="home_trending_item_text">Dây chuyền bạc</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/vong-lac-tay-bac.png" alt="" /><span class="home_trending_item_text">Lắc – Vòng tay Bạc</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/dong-ho.png" alt="" /><span class="home_trending_item_text">Đồng hồ</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/nhan-ecz.png" alt="" /><span class="home_trending_item_text">Nhẫn ECZ</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/bong-tai-kim-cuong.png" alt="" /><span class="home_trending_item_text">Bông tai kim cương</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/bong-tai-vang.png" alt="" /><span class="home_trending_item_text">Bông tai vàng</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/nhan-kim-cuong.png" alt="" /><span class="home_trending_item_text">Nhẫn kim cương</span></a>
          </div>
          <div class="home_trending_item">
            <a class="home_trending_link" href="index.php?product"><img src="https://cdn.pnj.io/images/image-update/2022/hot-categories/day-chuyen-vang.png" alt="" /><span class="home_trending_item_text">Dây chuyền vàng</span></a>
          </div>

        </div>
      </div>
      <div class="home_trending_prev">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
      <div class="home_trending_next">
        <i class="fa-solid fa-chevron-right"></i>
      </div>
    </div>
    <div class="home_product_trending">
      <div class="home_trending_heading d-flex justify-content-between">
        <h2>Sản Phẩm bán chạy</h2>
        <a href="/product.php" class="btn text-decoration-underline">Xem thêm</a>
      </div>
      <div class="home_product_trending1">
        <div class="overflow-hidden">
          <div class="product_trending_list d-flex">


            <?php foreach ($category1 as $key => $value) : ?>
              <div class="product_trending_item">
                <a href="productdetail.php?id=<?= $value['id'] ?>" class="product_trending_link d-flex flex-column">
                  <div class="product_trending_img" style="
<<<<<<< Updated upstream
                  background-image: url('assets/img/<?= $value['image'] ?>');
=======
                  background-image: url('../content/img/<?= $value['image'] ?>');
>>>>>>> Stashed changes
                "></div>
                  <div class="p-2">
                    <h4 class="product_trending_heading">
                      <?= $value['name'] ?>
                    </h4>
                    <span class="product_trending_price d-flex justify-content-center mb-4"><?= $value['price'] ?> đ</span>
                    <div class="d-flex justify-content-between">
                      <span class="product_trending_origin"><?= $value['origin'] ?></span>
                      <span class="product_trending_sold"><?= $value['quantity'] ?>+ sp</span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>


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
    <div class="home_collection">
      <div class="collection_heading">
        <h2>Bộ sưu tập mới</h2>
      </div>
      <div class="home_collection_content d-flex align-items-center">
        <div class="home_collection_banner">
          <img src="https://cdn.pnj.io/images/promo/136/Banner_BST_Nang_Thu_320x425.png" alt="" />
        </div>
        <div class="home_collection_product">
          <div class="overflow-hidden w-760">
            <div class="collection_list d-flex">
              <?php foreach ($category as $key => $value) : ?>

                <div class="collection_product_item">
                  <a href="productdetail.php?id=<?= $value['id'] ?>" class="collection_product_link">
                    <div class="collection_product_scale">
                      <div class="collection_product_img" style="
<<<<<<< Updated upstream
                          background-image: url('assets/img/<?= $value['image'] ?> ');
=======
                          background-image: url('../content/img/<?= $value['image'] ?> ');
>>>>>>> Stashed changes
                        "></div>
                    </div>
                    <div class="p-2">
                      <h4 class="product_trending_heading">
                        <?= $value['name'] ?>
                      </h4>
                      <span class="product_trending_price d-flex justify-content-center mb-4"><?= $value['price'] ?> đ</span>
                      <div class="d-flex justify-content-between">
                        <span class="product_trending_origin"><?= $value['origin'] ?></span>
                        <span class="product_trending_sold">+<?= $value['quantity'] ?> sp</span>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach ?>

            </div>
          </div>
          <div class="collection_prev">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
          <div class="collection_next">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="banner1">
      <img class="w-100" src="https://cdn.pnj.io/images/promo/138/phongthuy2022T9-banner_performance_1200x450CTA.jpg" alt="" />
    </div>
  </div>
  <div class="container-fluid p-0">
    <div class="banner2">
      <img class="w-100" src="https://cdn.pnj.io/images/image-update/2020/key_points/cuahangbanner.jpg" alt="" />
    </div>
    <div class="banner3">
      <div class="container banner3_bg">
        <div class="row banner3_list">
          <div class="col-3 banner3_item">
            <img class="banner3_img" src="https://cdn.pnj.io/images/image-update/2020/key_points/icon-circle-tragop.svg" alt="" />
            <div class="banner3_text">
              <h5>TRẢ GÓP 0% LÃI SUẤT</h5>
              <hr />
              <span class="description">
                Áp dụng dễ dàng qua thẻ tín dụng của hơn 20 ngân hàng
              </span>
            </div>
          </div>
          <div class="col-3 banner3_item">
            <img class="banner3_img" src="https://cdn.pnj.io/images/image-update/2020/key_points/icon-circle-giaotrong3h.svg" alt="" />
            <div class="banner3_text">
              <h5>GIAO HÀNG 3H</h5>
              <hr />
              <span class="description">Sở hữu ngay món trang sức yêu thích chỉ trong vòng 3 giờ
              </span>
            </div>
          </div>
          <div class="col-3 banner3_item">
            <img class="banner3_img" src="https://cdn.pnj.io/images/image-update/2020/key_points/icon-circle-nbv.svg" alt="" />
            <div class="banner3_text">
              <h5>NGƯỜI BẠN VÀNG</h5>
              <hr />
              <span class="description">
                Giải pháp tài chính cầm đồ; thu mua kim cương, túi hiệu và
                đồng hồ cơ
              </span>
            </div>
          </div>
          <div class="col-3 banner3_item">
            <img class="banner3_img" src="https://cdn.pnj.io/images/image-update/2020/key_points/icon-circle-uudai.svg" alt="" />
            <div class="banner3_text">
              <h5>ƯU ĐÃI ĐẾN 2 TRIỆU</h5>
              <hr />
              <span class="description">
                Đặt online - nhận ưu đãi tại showroom
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container p-0">
    <div class="heading1">
      <div class="banner3_hr"><span> Tin Tức</span></div>
    </div>

    <div class="banner4 d-flex">
      <div class="banner4_big">
        <img src="https://cdn.pnj.io/images/promo/117/thong-tin-gia-vang-copy.jpg" alt="" />
      </div>
      <div class="banner4_small">
        <div class="banner4_small1">
          <img src="https://cdn.pnj.io/images/image-update/blog-images/Top-5-trang-suc-ECZ-CZ-moi-an-tuong-nhat-2022-thumb-1.jpg" alt="" />
          <h5>Top 5 trang sức ECZ, CZ mới & ấn tượng nhất 2022</h5>
          <span>
            Trang sức đá ECZ và CZ luôn chiếm một vị trí quan trọng trong lòng
            phái đẹp. Hãy cùng PNJ nhìn ngắm top 5 điểm nhấn được chế tác từ
            loại đá này, hứa hẹn sẽ được hội chị em săn đón nhất năm 2022 nhé!
          </span>
          <div>
            <a href="" class="btn">Xem Thêm <i class="fa-solid fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="banner4_small1">
          <img src="https://cdn.pnj.io/images/image-update/blog-images/Top-5-cap-nhan-cuoi-mang-mau-sac-Disney-hot-nhat-mua-cuoi-2022-thumb.jpg" alt="" />
          <h5>
            Top 5 cặp nhẫn cưới mang màu sắc Disney hot nhất mùa cưới 2022
          </h5>
          <span>
            Một mùa cưới nữa đã đến. Các cặp đôi chắc hẳn cũng đang lên kế
            hoạch tìm mua nhẫn cưới – kỷ vật đính ước của cả hai, phải không?
            Tham khảo ngay 5 lựa chọn này nhé!
          </span>
          <div>
            <a href="" class="btn">Xem Thêm <i class="fa-solid fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="banner4_btn d-flex justify-content-center">
      <a class="banner4_btn_link" href="">Xem Tất Cả</a>
    
    </div>
  </div>
  <script src="/content/js/index.js"></script>