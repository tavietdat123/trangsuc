<h4>Sửa Sản Phẩm</h4>
                <form action="adminfixprd.php?id=<?=$id_get?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$getprd['id']?>" name="id">
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Tên sản phẩm</label>
                        <input type="text" name='name' class='form-control' value="<?=$getprd['name']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_name)){ echo$erorr_name;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Giá sản phẩm</label>
                        <input type="number" name='price' class='form-control' value="<?=$getprd['price']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrprice)){ echo$erorrprice;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Xuất sứ sản phẩm</label>
                        <input type="text" name='origin' class='form-control' value="<?=$getprd['origin']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_origin)){ echo$erorr_origin;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Số lượng sản phẩm</label>
                        <input type="number" name='quantity' class='form-control' value="<?=$getprd['quantity']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrquantity)){ echo$erorrquantity;}?></span>
                    </div>
            
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Khối lượng sản phẩm</label>
                        <input type="number" name='weight' class='form-control' value="<?=$getdetail['weight']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrweight)){ echo$erorrweight;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Hình dáng</label>
                        <input type="text" name='format' class='form-control' value="<?=$getdetail['format']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_format)){ echo$erorr_format;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Loại đá</label>
                        <input type="text" name='typeofstone' class='form-control' value="<?=$getdetail['typeofstone']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_typeofstone)){ echo$erorr_typeofstone;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Mô tả sản phẩm</label>
                        <input type="text" name='description' class='form-control' value="<?=$getdetail['description']?>" >
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_description)){ echo$erorr_description;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Ảnh hiển thị sản phẩm</label>
                        <img height="150" src="assets/img/<?= $getprd['image']?>" alt="">
                        <input type="hidden" value="<?= $getprd['image']?>" name="anh">
                        <input type="file" name='image' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img)) {
                                                                        echo $erorr_img;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 1 </label>
                        <img height="150" src="assets/img/<?= $getdetail['image1']?>" alt="">
                        <input type="hidden" value="<?= $getdetail['image1']?>" name="anh1">
                        <input type="file" name='image1' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img1)) {
                                                                        echo $erorr_img1;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 2</label>
                        <img height="150" src="assets/img/<?= $getdetail['image2']?>" alt="">
                        <input type="hidden" value="<?= $getdetail['image2']?>" name="anh2">
                        <input type="file" name='image2' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img2)) {
                                                                        echo $erorr_img2;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 3</label>
                        <img height="150" src="assets/img/<?= $getdetail['image3']?>" alt="">
                        <input type="hidden" value="<?= $getdetail['image3']?>" name="anh3">
                        <input type="file" name='image3' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img3)) {
                                                                        echo $erorr_img3;
                                                                    } ?></span>
                    </div>
            
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Loại sản phẩm</label>
                        <select name="category_id" id="">
                            <?php foreach ($categorie as $in => $value): ?>
                            <option value="<?=$value['id'] ?>"  <?= ($getprd['category_id'] == $value['id']) ? "selected" : ""?> ><?= $value['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button class='btn btn-primary' type='submit' name="check">Sửa</button>
                        <button class='btn btn-warning' type='reset'>Nhập lại</button>
                    </div>
            
                </form>