<?php
$id = $_GET['id'];
$stmt2s = user_selectall_id($id);
if(isset($_POST['check'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($name == ''){
        $erorr_name ="Bạn Cần phải nhập tên";
    }
    if($username == ''){
        $erorr_username ="Bạn Cần phải nhập username";
    }
    if($password == ''){
        $erorr_password ="Bạn Cần phải nhập mật khẩu";
    }
    if(!isset($erorr_name)){
        user_update($id,$username, $password, $name);
        header("location: index.php?users");
    }
}
?>
<h4>Sửa tài khoản</h4>
<form action="index.php?user_fix&id=<?=$id?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" >
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">UserName</label>
                        <input type="text" name='username' class='form-control mt-2' value="<?=$stmt2s['username']?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_username)){ echo$erorr_username;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Password</label>
                        <input type="text" name='password' class='form-control mt-2' value="<?=$stmt2s['password']?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_name)){ echo$erorr_name;}?></span>
                    </div>
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Name</label>
                        <input type="text" name='name' class='form-control mt-2' value="<?=$stmt2s['name']?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_password)){ echo$erorr_password;}?></span>
                    </div>
                    
                    <div class="mt-4">
                        <button class='btn btn-primary' type='submit' name="check">Sửa</button>
                        <button class='btn btn-warning' type='reset'>Nhập lại</button>
                    </div>
            
                </form>