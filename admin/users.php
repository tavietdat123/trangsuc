<?php
$users = user_selectall_role_id();
?>
<table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Name</th>

                <th>hành động</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($users as $index => $value):?>
              <tr>
              <th><?= $value['id']?></th>

                <th><?= $value['username']?></th>
                <th><?= $value['password']?></th>
                <th><?= $value['name']?></th>
                <th>
                  <a href="delete_user.php?id=<?php echo$value['id']?>"
                    ><button class="btn btn-danger">xóa</button></a
                  >
                  <a href="index.php?user_fix&id=<?php echo$value['id']?>"
                    ><button class="btn bg-primary text-white">Sửa</button></a
                  >
                </th>
              </tr>
              <?php endforeach?>

            </tbody>
          </table>