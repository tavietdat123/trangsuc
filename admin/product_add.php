<?php
if (isset($_POST['check'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $origin = $_POST['origin'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $format = $_POST['format'];
    $typeofstone = $_POST['typeofstone'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $image = $_FILES['image'];
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];
    $image3 = $_FILES['image3'];
    if ($image['size'] > 0) {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);//Hàm pathinfo() sẽ lấy thông tin về đường dẫn truyền vào.
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img = "File không đúng định dạng";
        }
    } else {
        $erorr_img = "Bạn chưa nhập ảnh";
    }
    if ($image1['size'] > 0) {
        $ext = pathinfo($image1['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img1 = "File không đúng định dạng";
        }
    } else {
        $erorr_img1 = "Bạn chưa nhập ảnh";
    }
    if ($image2['size'] > 0) {
        $ext = pathinfo($image2['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img2 = "File không đúng định dạng";
        }
    } else {
        $erorr_img2 = "Bạn chưa nhập ảnh";
    }
    if ($image3['size'] > 0) {
        $ext = pathinfo($image3['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img3 = "File không đúng định dạng";
        }
    } else {
        $erorr_img3 = "Bạn chưa nhập ảnh";
    }
    if ($name == "") {
        $erorr_name = "Bạn chưa nhập tên sản phẩm";
    }
    if ($category_id == "") {
        $erorr_category_id = "Bạn chưa nhập tên sản phẩm";
    }
    if ($origin == "") {
        $erorr_origin = "Bạn chưa nhập xuất sứ sản phẩm";
    }
    if ($format == "") {
        $erorr_format = "Bạn chưa nhập hình dạng sản phẩm";
    }
    if ($typeofstone == "") {
        $erorr_typeofstone = "Bạn chưa nhập loại đá sản phẩm";
    }
    if ($description == "") {
        $erorr_description = "Bạn chưa nhập mô tả sản phẩm";
    }
    if($price == ""){
        $erorrprice = "Bạn chưa nhập giá sản phẩm";
    }elseif($price <= 0){
        $erorrprice = "Bạn phải nhập số dương";
    }
    if($quantity == ""){
        $erorrquantity = "Bạn chưa nhập số lượng";
    }elseif($quantity <= 0){
        $erorrquantity = "Bạn phải nhập số dương";
    }
    if($weight == ""){
        $erorrweight = "Bạn chưa nhập khối lượng";
    }elseif($weight <= 0){
        $erorrweight = "Bạn phải nhập số dương";
    }
    if(!isset($erorr_img) && !isset($erorr_img1) && !isset($erorr_img2) && !isset($erorr_img3) && !isset($erorr_name) && !isset($erorr_origin) && !isset($erorr_format) && !isset($erorr_typeofstone) && !isset($erorr_description) && !isset($erorrprice) && !isset($erorrquantity) && !isset($erorrweight) && !isset($erorr_category_id)){
        $img_sp = $image['name'];
        $img_sp1 = $image1['name'];
        $img_sp2 = $image2['name'];
        $img_sp3 = $image3['name'];
        pro_insert($name,$price,$origin,$quantity,$img_sp, $category_id);
        move_uploaded_file($image['tmp_name'] , '../content/img/'.$img_sp);
        $id =  array_pop(pro_selectall())['id'];
        detail_insert($weight, $typeofstone, $format, $description, $img_sp1, $img_sp2, $img_sp3, $id);
        move_uploaded_file($image1['tmp_name'] , '../content/img/'.$img_sp1);
        move_uploaded_file($image2['tmp_name'] , '../content/img/'.$img_sp2);
        move_uploaded_file($image3['tmp_name'] , '../content/img/'.$img_sp3);
        header("Location: index.php?product");
        }
   
}
$categorie = category_selectall();
?>
<h4>Tạo Sản Phẩm Mới</h4>
                <form action="index.php?product_add" method="post" enctype="multipart/form-data">
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