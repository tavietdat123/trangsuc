<?php
$product = pro_selectall();
?>
<a href="index.php?product_add" class="btn btn-primary mb-4 pe-5 ps-5">Tạo sản phẩn mới</a>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Xuất sứ</th>
                <th>Số lượng</th>
                <th>Loại</th>
                <th>hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($product as $index =>$value): ?> 
              <tr>
                <th><?=$value['id']?></th>
                <th>
                  <img
                    height="80"
                    src="/content/img/<?=$value['image']?>"
                  />
                </th>
                <th><?=$value['name']?></th>
                <th><?=$value['price']?></th>
                <th><?=$value['origin']?></th>
                <th><?=$value['quantity']?></th>
                <th><?php
                $carts =category_select_one1($value['category_id']);
                if(isset($carts['name'])){
                  echo$carts['name'];
                }else{
                  echo"";
                }   
                ?></th>
                <th>
                  <a  href="delete_prd.php?id=<?=$value['id']?>"
                    ><button onclick="confirm('Bạn có chắc muốn xóa sản phẩm này')" class="btn btn-danger">xóa</button></a
                  >
                  <a href="index.php?product_fix&id=<?php echo$value['id']?>"
                    ><button class="btn bg-primary text-white">Sửa</button></a
                  >
                </th>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>