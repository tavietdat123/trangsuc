<?php
$dsdm = category_selectall();
?>
<div class="container p-0 ">
    <img width="w-100" src="https://cdn.pnj.io/images/promo/135/cuoi-t7-1200x450.jpg" alt="">
</div>
<div class="container p-0">
    <div class="product_category d-flex mt-2 justify-content-center">
        <?php
        foreach ($dsdm as $dm) {
            $name = $dm['name'];
            $linkdm = "index.php?categoriest&iddm=" . $dm['id'];
            echo '
          <div class="product_category_item">
                <a href="' . $linkdm . '" class="product_category_link">' . $name . '</a>
            </div>';
        }

        ?>
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
    <?php   
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                switch($act){
                    case 'product':
                        if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                            $iddm=$_GET['iddm']; 
                        } 
                        else{
                            $iddm=0;
                        }
                        $dssp=category_select_dm($iddm);
                        include "../site/product.php";
                        break;

                }
            }
            ?>

</div>
