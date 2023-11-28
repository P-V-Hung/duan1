<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách tài khoản</h2>
    <form class="input-group mb-3" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Nhập tên tài khoản muốn tìm kiếm" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" name="btn-search" id="button-addon2">Tìm kiếm</button>
        <button class="btn btn-outline-secondary" type="submit" name="btn-all" id="button-addon2">Tất cả tài khoản</button>
    </form>
    <form action="" method="post">
        <table class="table-hung table_account">
            <thead>
                <tr class="table-hung-th">
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Email</th>
                    <th hidden>Mã cv</th>
                    <th style="position: relative;">
                        Chức vụ
                        <i class="fa-solid fa-caret-down"></i>
                        <select id="selectRole" style="position: absolute;right: 25px;opacity: 0;" name="">
                            <option value="0">Tất cả</option>
                            <option value="1">Quản trị viên</option>
                            <option value="2">Khách hàng</option>
                        </select>
                    </th>
                    <th style="position: relative;">
                        Trạng thái
                        <i class="fa-solid fa-caret-down"></i>
                        <select id="selectStatus" style="position: absolute;right:25px;opacity: 0;" name="">
                            <option value="0">Tất cả</option>
                            <option value="1">Hoạt động</option>
                            <option value="2">Đã khóa</option>
                        </select>
                    </th>
                    <th hidden>Mã status</th>
                    <th>Thao tác</th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="body-listUser">
                <?php $i = 1;
                foreach ($listAccount as $acc) : ?>
                    <tr class="trListAccount">
                        <td><input type="checkbox" name="checkVou<?= $acc['id'] ?>" value="<?= $acc['id'] ?>" class="checkbtn" id=""></td>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $acc['id'] ?></td>
                        <td><?php echo $acc['u_username'] ?></td>
                        <td><?php echo $acc['u_email'] ?></td>
                        <td hidden class="roleId"><?php echo $acc['u_role'] ?></td>
                        <td>
                            <?php
                            if ($acc['u_role'] == 1) echo "<span style='color:blue;'>Quản trị viên</span>";
                            else if ($acc['u_role'] == 2) echo "Khách hàng";
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($acc['u_status'] == 1) echo "<span style='color:green;'>Hoạt động</span>";
                            else if ($acc['u_status'] == 2) echo "<span style='color:red;'>Đã khóa</span>";
                            ?>
                        </td>
                        <td hidden class="statusId"><?php echo $acc['u_status'] ?></td>
                        <td>
                            <a href="<?= $adminUrl . "account/update&id=" . $acc['id'] ?>">Sửa</a> |
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')" href="<?= $adminUrl . "account/delete&id=" . $acc['id'] ?>">Xóa</a>
                        </td>
                        <td><a href=""><i class="fa-solid fa-circle-info"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="btn_property d-flex justify-content-center mt-3 mb-4">
            <input type="submit" name="btn-unlock-a" class="btn btn-outline-dark mx-2" value="Mở khóa tất cả tài khoản đã chọn" onclick="return confirm('Bạn chắc chắn muốn mở khóa các tài khoản đã chọn ?')">
            <input type="submit" name="btn-lock-a" class="btn btn-outline-dark me-2" value="Khóa các tài khoản đã chọn" onclick="return confirm('Bạn chắc chắn muốn khóa các tài khoản đã chọn ?')">
            <input type="submit" name="btn-deletes-a" class="btn btn-outline-dark" value="Xóa tất cả ô đã chọn" onclick="return confirm('Bạn chắc chắn muốn xóa các tài khoản đã chọn ?')">
        </div>
    </form>
    <script>
        // Chọn tất cả ô check
        let listInput = document.querySelectorAll(".checkbtn");
        let inputAll = document.getElementById("checkAll");
        inputAll.addEventListener("change", function() {
            if (inputAll.checked) {
                for (let i = 0; i < listInput.length; i++) {
                    listInput[i].checked = true;
                }
            } else {
                for (let i = 0; i < listInput.length; i++) {
                    listInput[i].checked = false;
                }
            }
        });

        let bodyTable = document.getElementById("body-listUser");
        let selectRole = document.getElementById("selectRole");
        let selectStatus = document.getElementById("selectStatus");
        let trListAccount = document.querySelectorAll(".trListAccount");

        
        // function locSp(select, list, classdk, view) {
        //     select.onchange = function() {
        //         let htmlText = '';
        //         for (let i = 0; i < list.length; i++) {
        //             let inp = list[i].querySelector(classdk).innerText;
        //             if (inp == select.value || select.value == 0) {
        //                 htmlText += list[i].outerHTML;
        //             }
        //         }
        //         view.innerHTML = htmlText;
        //     }
        // }
        
        
        // locSp(selectRole, trListAccount, ".roleId", bodyTable);
        // locSp(selectStatus, trListAccount, ".statusId", bodyTable);


        function locSp(selectRole, selectStatus, list, classRole, classStatus, view) {
            selectRole.onchange = selectStatus.onchange = function() {
                let htmlText = '';
                for (let i = 0; i < list.length; i++) {
                    let role = list[i].querySelector(classRole).innerText;
                    let status = list[i].querySelector(classStatus).innerText;

                    if ((role == selectRole.value || selectRole.value == 0) &&
                        (status == selectStatus.value || selectStatus.value == 0)) {
                        htmlText += list[i].outerHTML;
                    }
                }
                view.innerHTML = htmlText;
            }
        }

        locSp(selectRole, selectStatus, trListAccount, ".roleId", ".statusId", bodyTable);


    </script>