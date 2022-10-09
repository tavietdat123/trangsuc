<?php
$prd_all = pro_selectall();
 ?>
<div class="container p-0 ">
        <img width="w-100" src="https://cdn.pnj.io/images/promo/135/cuoi-t7-1200x450.jpg" alt="">
    </div>
    <div class="container p-0">
        <div class="product_category d-flex mt-2 justify-content-center">
            <div class="product_category_item">
                <a href="" class="product_category_link">Nhẫn</a>
            </div>
            <div class="product_category_item">
                <a href="" class="product_category_link">Bông Tai</a>
            </div>
            <div class="product_category_item">
                <a href="" class="product_category_link">Dây Chuyền</a>
            </div>
            <div class="product_category_item">
                <a href="" class="product_category_link">Lắc Tay</a>
            </div>
            <div class="product_category_item">
                <a href="" class="product_category_link">Vòng Tay</a>
            </div>
            <div class="product_category_item">
                <a href="" class="product_category_link">Kiềng</a>
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-between">
            <div class="product_filter ">
                <div class="product_filter_title"><span>Bộ lọc:</span>
                </div>
                <div class="product_filter_box_container mt-2 d-flex">
                    <div class="product_filter_box product_filter_box_price"><span>Giá <i class="fa-solid fa-chevron-down"></i>
                            <div class="product_filter_box_price1">
                                <ul>
                                    <li>Cao</li>
                                    <li>Thấp</li>
                                    <li>Trung</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                    <div class="product_filter_box product_filter_box_sex"><span>Giới Tính <i class="fa-solid fa-chevron-down"></i>
                            <div class="product_filter_box_sex1">
                                <ul>
                                    <li>Nam</li>
                                    <li>Nữ</li>
                                    <li>Bê Đê</li>
                                </ul>
                            </div>
                        </span></div>
                    <div class="product_filter_box product_filter_box_brand"><span>Thương Hiệu <i class="fa-solid fa-chevron-down"></i>
                            <div class="product_filter_box_brand1">
                                <ul>
                                    <li>LV</li>
                                    <li>Gucci</li>
                                    <li>DIOR</li>
                                </ul>
                            </div>
                        </span></div>
                </div>
            </div>
            <div class="product_filter">
                <div class="product_filter_title"><span>Sắp Xếp:</span>
                </div>
                <div class="product_filter_box_container mt-2">
                    <div class="product_filter_box product_filter_box_trend"><span>Sản Phẩm Phổ Biến Nhất <i class="fa-solid fa-chevron-down"></i>
                            <div class="product_filter_box_trend1">
                                <ul>
                                    <li>Sản phẩm phổ biến nhấ<table></table>
                                    </li>
                                    <li>cao-Thấp</li>
                                    <li>Thấp-Cao</li>
                                </ul>
                            </div>
                        </span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container_prd">
        <div class="row">
            <?php foreach ($prd_all as $key => $value):?>
            <div class="col-3 col ">
                <div class="product_item">
                    <a href="index.php?productdetail&id=<?=$value['id']?>" class="product_trending_link d-flex flex-column">
                        <div class="product_trending_img_scale">
                            <div class="product_trending_img" style="background-image: url('/content/img/<?= $value['image'] ?>');"></div>
                        </div>
                        <div class="p-2">
                            <h4 class="product_trending_heading"><?= $value['name']?></h4>
                            <span class="product_trending_price d-flex justify-content-center mb-4"><?= $value['price']?>đ</span>
                            <div class="d-flex justify-content-between">
                                <span class="product_trending_origin"><?= $value['origin']?></span>
                                <span class="product_trending_sold"><?= $value['quantity']?> sp</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach;?>

        </div>

    </div>