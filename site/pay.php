<div class="container mt-4">
        <form class="needs-validation" name="frmthanhtoan" method="post"
            action="#">
            <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

            <div class="py-5 text-center">
                <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                <h2>Thanh toán</h2>
                <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Giỏ hàng</span>
                        <span class="badge badge-secondary badge-pill">2</span>
                    </h4>
                    <ul class="list-group mb-3">
                       
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
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?=$prd['name']?></h6>
                                <small class="text-muted"><?=$prd['price']?> x <?=$value['quantity']?></small>
                            </div>
                            <span class="text-muted"><?=$result?></span>
                        </li>
<?php endforeach; ?>
                       

                        
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Tổng thành tiền</span>
                            <strong><?=$result1?></strong>
                        </li>
                    </ul>


                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Xác nhận</button>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Thông tin khách hàng</h4>

                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="kh_ten">Họ tên</label>
                            <input type="text" class="form-control" name="kh_ten" id="kh_ten"
                                value="" placeholder="Nguyễn Văn a" readonly="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_gioitinh">Giới tính</label>
                            <select class="form-control" value=""  name="" id="">
                            <option value="">Giới Tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                            
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_diachi">Địa chỉ</label>
                            <input type="text" class="form-control" name="kh_diachi" id="kh_diachi"
                                value="" placeholder="Tỉnh/Thành phố/Quận Huyện" readonly="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_dienthoai">Điện thoại</label>
                            <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai"
                                value="" placeholder="0123..." readonly="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_email">Email</label>
                            <input type="text" class="form-control" name="kh_email" id="kh_email"
                                value="" placeholder="phucuong@ctu.edu.vn" readonly="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_ngaysinh">Ngày sinh</label>
                            <input type="date" value="1/1/2002" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh"
                                value="11/6/1989" readonly="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="kh_cmnd">CMND</label>
                            <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd" value="" placeholder="362209685"
                                readonly="">
                        </div>
                    </div>

                    <h4 class="mb-3">Hình thức thanh toán</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                value="1">
                            <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                value="2">
                            <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                value="3">
                            <label class="custom-control-label" for="httt-3">Ship COD</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                        hàng</button>
                </div>
            </div>
        </form>

    </div>
    <!-- End block content -->
</main>