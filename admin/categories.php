<a href="index.php?category_add" class="btn btn-primary mb-4 pe-5 ps-5">Tạo Danh Mục Mới</a>

          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Loại</th>
                <th>Hành động</th>
                
              </tr>
            </thead>
            <tbody>
              <?php foreach($result as $index => $value):?>
              <tr>
                <th><?=$value['id']?></th>
                
                <th><?=$value['name']?></th>
                <th>
                  <a href="admindlctgr.php?id=<?php echo$value['id']?>"
                    ><button class="btn btn-danger">xóa</button></a
                  >
                  <a href="adminfixctgr.php?id=<?php echo$value['id']?>"
                    ><button class="btn bg-primary text-white">Sửa</button></a
                  >
                </th>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>