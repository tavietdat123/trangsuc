<?php
$id = $_GET['id'];
$stmt2s = category_select_one1($id);
if(isset($_POST['check'])){
    $name = $_POST['name'];
    if($name == ''){
        $erorr_name ="Bạn Cần phải nhập tên";
    }
    if(!isset($erorr_name)){
        category_update($id, $name);
        header("location: index.php?categories");
    }
}


?>
<h4>Sửa Danh mục</h4>
<form action="index.php?category_fix&id=<?=$id?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" >
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Tên Danh Mục</label>
                        <input type="text" name='name' class='form-control mt-2' value="<?=$stmt2s['name']?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_name)){ echo$erorr_name;}?></span>
                    </div>
                    <div class="mt-4">
                        <button class='btn btn-primary' type='submit' name="check">Sửa</button>
                        <button class='btn btn-warning' type='reset'>Nhập lại</button>
                    </div>
            
                </form>