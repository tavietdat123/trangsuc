<h4>Tạo Danh mục</h4>
<form action="/admincreatectgr.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" >
                    <div class='form-group w-75'>
                        <label class="mt-2" for="">Tên Danh Mục</label>
                        <input type="text" name='name' class='form-control mt-2' value="<?php if(isset($name)){echo$name; }?>" value="">
                        <span style="color: red; font-size: 12px;"><?php if(isset($erorr_name)){ echo$erorr_name;}?></span>
                    </div>
                    <div class="mt-4">
                        <button class='btn btn-primary' type='submit' name="check">Tạo mới</button>
                        <button class='btn btn-warning' type='reset'>Nhập lại</button>
                    </div>
            
                </form>