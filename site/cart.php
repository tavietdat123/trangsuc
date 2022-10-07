<div class="container p-0 container_cart">
<?php if(isset($carts) &&  !$carts): ?>
<!-- no-product -->
<div class="cart_no_product justify-content-center align-items-center d-flex flex-column">
<img  src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png" alt="">
<span class="mt-3">Giỏ hàng của bạn còn trống</span>
<a href="index.php?product" class="btn btn-danger mt-3"> Mua Ngay</a>
</div>

<?php endif ;?>
<?php if(!isset($_SESSION['name'])): ?>
<div class="cart_no_product justify-content-center align-items-center d-flex flex-column">
    <img  src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/cart/9bdd8040b334d31946f49e36beaf32db.png" alt="">
    <span class="mt-3">Bạn cần đăng nhập để xem giỏ hàng</span>
    <a href="index.php?login" class="btn btn-danger mt-3">Đăng nhập</a>
    </div>
<?php endif; ?>


<!--have products                ------>

<?php if(isset($carts) &&  $carts): ?>

<div class="col-12 ">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th class="w-50">Tên sản phẩm</th>
                <th style="width:10%">Giá</th>
                <th style="width:8%">Số lượng</th>
                <th style="width:22%" class="text-center">Thành tiền</th>
                <th style="width:10%"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carts as $index =>$value): ?>
            <?php
            $product_id = $value['product_id'];
                $sql3 = "SELECT * FROM products WHERE id = $product_id";
                $stmt2 = $connect->prepare($sql3);
                $stmt2->execute();
                $prd = $stmt2->fetch();
            $result = ($value['quantity'] * $prd['price']);
            
            $result1 += $result; 
                ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="/assets/img/<?=$prd['image']?>" alt="Sản phẩm 1" class="img-responsive" width="100">
                        </div>
                        <div class="col-sm-10">
                            <h5 class="nomargin"><?=$prd['name']?></h5>

                        </div>
                    </div>
                </td>
                <td data-th="Price"><?=$prd['price']?> đ</td>
                <td data-th="Quantity"><input disabled class="form-control text-center" value="<?=$value['quantity']?>" type="number">
                </td>
                <td data-th="Subtotal" class="text-center"><?=$result?> đ</td>
                <td class="actions" data-th="">
                    
                    <a href="deletecart.php?id=<?=$value['id']?>" class="btn btn-danger btn-sm">Xóa
                </a>
                </td>
            </tr>
<?php endforeach; ?>

        </tbody>
        <tfoot>
            
            <tr>
                <td><a href="index.php?product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền <?=$result1 ?>đ</strong>
                </td>
                <td><a href="index.php?pay" class="btn btn-success btn-block">Thanh toán<i class="fa fa-angle-right"></i></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<?php endif; ?>
            </div>