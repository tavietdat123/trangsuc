<h4>Tạo Sản Phẩm Mới</h4>
                <form action="/admincreateprd.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" >
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Tên sản phẩm</label>
                        <input type="text" name='name' class='form-control' value="<?php if(isset($name)){echo$name; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_name)){ echo$erorr_name;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Giá sản phẩm</label>
                        <input type="number" name='price' class='form-control' value="<?php if(isset($price)){echo$price; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrprice)){ echo$erorrprice;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Xuất sứ sản phẩm</label>
                        <input type="text" name='origin' class='form-control' value="<?php if(isset($origin)){echo$origin; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_origin)){ echo$erorr_origin;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Số lượng sản phẩm</label>
                        <input type="number" name='quantity' class='form-control' value="<?php if(isset($quantity)){echo$quantity; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrquantity)){ echo$erorrquantity;}?></span>
                    </div>
            
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Khối lượng sản phẩm</label>
                        <input type="number" name='weight' class='form-control' value="<?php if(isset($weight)){echo$weight; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorrweight)){ echo$erorrweight;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Hình dáng</label>
                        <input type="text" name='format' class='form-control' value="<?php if(isset($format)){echo$format; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_format)){ echo$erorr_format;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Loại đá</label>
                        <input type="text" name='typeofstone' class='form-control' value="<?php if(isset($typeofstone)){echo$typeofstone; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_typeofstone)){ echo$erorr_typeofstone;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Mô tả sản phẩm</label>
                        <input type="text" name='description' class='form-control' value="<?php if(isset($description)){echo$description; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_description)){ echo$erorr_description;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Ảnh hiển thị sản phẩm</label>
                        <input type="file" name='image' class='form-control' value="">
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img)) {
                                                                        echo $erorr_img;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 1 </label>
                        <input type="file" name='image1' class='form-control' value="">
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img1)) {
                                                                        echo $erorr_img1;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 2</label>
                        <input type="file" name='image2' class='form-control' value="">
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img2)) {
                                                                        echo $erorr_img2;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 3</label>
                        <input type="file" name='image3' class='form-control' value="">
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img3)) {
                                                                        echo $erorr_img3;
                                                                    } ?></span>
                    </div>
            
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Loại sản phẩm</label>
                        <select name="category_id" id="" value="<?php if(isset($category_id)){echo$category_id; }?>">
                            <?php foreach ($categorie as $in => $value): ?>
                                
                            <option value="<?=$value['id'] ?>"><?= $value['name']?></option>
                            <?php endforeach; ?>
                        </select>
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_category_id)){ echo$erorr_category_id;}?></span>

                    </div>
                    <div class="mt-4">
                        <button class='btn btn-primary' type='submit' name="check">Tạo mới</button>
                        <button class='btn btn-warning' type='reset'>Nhập lại</button>
                    </div>
            
                </form>