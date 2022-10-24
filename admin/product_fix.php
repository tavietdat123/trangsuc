<?php
$id_get = $_GET["id"];
$getprd = pro_select_one($id_get);
$getdetail = detail_select_one($getprd['id']);
$categorie = category_selectall();
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
    $anh = $_POST['anh'];
    $anh1 = $_POST['anh1'];
    $anh2 = $_POST['anh2'];
    $anh3 = $_POST['anh3'];
    if ($image['size'] > 0) {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);//pathinfo lấy thông tin đường dẫn chuyền vào
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img = "File không đúng định dạng";
        }else{
            $anh = $image['name'];
        }
    } 
    if ($image1['size'] > 0) {
        $ext = pathinfo($image1['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img1 = "File không đúng định dạng";
        }else{
            $anh1 = $image1['name'];
        }
    } 
    if ($image2['size'] > 0) {
        $ext = pathinfo($image2['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img2 = "File không đúng định dạng";
        }else{
            $anh2 = $image2['name'];

        }
    } 

    if ($image3['size'] > 0) {
        $ext = pathinfo($image3['name'], PATHINFO_EXTENSION);
        if ($ext != "png" && $ext != "jpg" && $ext != "jpeg" && $ext != "gif") {
            $erorr_img3 = "File không đúng định dạng";
        }else{
            $anh3 = $image3['name'];
        }
    } 
    if ($name == "") {
        $erorr_name = "Bạn chưa nhập tên sản phẩm";
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
    if(!isset($erorr_img) && !isset($erorr_img1) && !isset($erorr_img2) && !isset($erorr_img3) && !isset($erorr_name) && !isset($erorr_origin) && !isset($erorr_format) && !isset($erorr_typeofstone) && !isset($erorr_description) && !isset($erorrprice) && !isset($erorrquantity) && !isset($erorrweight) ){
        pro_update($id_get,$name,$price,$origin,$quantity,$anh, $category_id);
            move_uploaded_file($image['tmp_name'] , '../content/img/'.$anh);
        detail_update1( $weight, $typeofstone, $format, $description, $anh1, $anh2, $anh3, $id_get);
            move_uploaded_file($image1['tmp_name'] , '../content/img/'.$anh1);
            move_uploaded_file($image2['tmp_name'] , '../content/img/'.$anh2);
            move_uploaded_file($image3['tmp_name'] , '../content/img/'.$anh3);
        header("Location: index.php?product");

        }
}
?>
<h4>Sửa Sản Phẩm</h4>
                <form action="index.php?product_fix&id=<?=$id_get?>" method="post" enctype="multipart/form-data">
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
                        <img height="150" src="/content/img/<?= $getprd['image']?>" alt="">
                        <input type="hidden" value="<?= $getprd['image']?>" name="anh">
                        <input type="file" name='image' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img)) {
                                                                        echo $erorr_img;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 1 </label>
                        <img height="150" src="/content/img/<?= $getdetail['image1']?>" alt="">
                        <input type="hidden" value="<?= $getdetail['image1']?>" name="anh1">
                        <input type="file" name='image1' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img1)) {
                                                                        echo $erorr_img1;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 2</label>
                        <img height="150" src="/content/img/<?= $getdetail['image2']?>" alt="">
                        <input type="hidden" value="<?= $getdetail['image2']?>" name="anh2">
                        <input type="file" name='image2' class='form-control' >
                        <span style="color: red; font-size: 12px;"><?php if (isset($erorr_img2)) {
                                                                        echo $erorr_img2;
                                                                    } ?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">ảnh chi tiết 3</label>
                        <img height="150" src="/content/img/<?= $getdetail['image3']?>" alt="">
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