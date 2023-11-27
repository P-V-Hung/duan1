<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Danh sách bình luận</h2>
    <form action="" method="post">
        <table class="table-hung table_account">
            <thead>
                <tr class="table-hung-th">
                    <th><input type="checkbox" id="checkAll"></th>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                    <th>Người bình luận</th>
                    <th>Sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th style="position: relative;">
                        Đánh giá
                        <i class="fa-solid fa-caret-down"></i>
                        <select id="selectRate" style="position: absolute;right: 15px;width: 90px;opacity: 0; " name="">
                            <option value="0">Tất cả</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </th>
                    <th hidden>Mã status</th>
                    <th style="position: relative;">
                        Trạng thái
                        <i class="fa-solid fa-caret-down"></i>
                        <select id="selectStatus" style="position: absolute;right: 10px;opacity: 0;" name="">
                            <option value="0">Tất cả</option>
                            <option value="1">Đang hiển thị</option>
                            <option value="2">Đã ẩn</option>
                        </select>
                    </th>
                    <th>Thao tác</th>
                </tr>
            </thead>

            <tbody id="body-listComment">
                <?php $i = 1;
                foreach ($echoListComment as $com) : ?>
                    <tr class="trListComment">
                        <td><input type="checkbox" name="checkVou<?= $com['id'] ?>" value="<?= $com['id'] ?>" class="checkbtn" id=""></td>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $com['id'] ?></td>
                        <td><?php echo $com['com_content'] ?></td>
                        <td><img src="<?php if(isset($com['com_img'])) echo $pathUpload.$com['com_img'] ?>" alt="No Photo" style="height: 60px; max-width: 50px"></td>
                        <td>
                            <?php 
                                if($com['username'] == "Tài khoản đã bị xóa")
                                {
                                    echo $com['username'];
                                }else{
                                    echo "<a style='text-decoration:none;color:black;' href='".$adminUrl.'account/update&id='.$com['com_userid']."'>".$com['username']."</a>";
                                }
                            ?>
                        </td>
                        <td>
                        <?php 
                            if($com['com_proid'] == "Sản phẩm đã bị xóa")
                            {
                                echo $com['com_proid'];
                            }else{
                                echo "<a style='text-decoration:none;color:black;' href='".$adminUrl.'product/update&id='.$com['com_proid']."'>".$com['pro_name']."</a>";
                            }
                        ?>
                        </td>
                        <td><?php echo date("d-m-Y",strtotime($com['com_date'])) ?></td>
                        <td class="rateId"><?php echo $com['com_reating'] ?></td>
                        <td hidden class="statusId"><?php echo $com['com_status'] ?></td>
                        <td>
                            <?php
                            if ($com['com_status'] == 1) echo "Đang hiển thị";
                            else if ($com['com_status'] == 2) echo "<span style='color:red;'>Đã ẩn</span>";
                            ?>
                        </td>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa bình luận này ?')" href="<?= $adminUrl . "comment/delete&id=" . $com['id'] ?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="btn_property d-flex justify-content-center mt-3 mb-4">
            <input type="submit" name="btn-unlock-c" class="btn btn-outline-dark mx-2" value="Hiển thị các bình luận đã chọn" onclick="return confirm('Bạn chắc chắn muốn hiển thị các bình luận đã chọn ?')">
            <input type="submit" name="btn-lock-c" class="btn btn-outline-dark me-2" value="Ẩn các bình luận đã chọn" onclick="return confirm('Bạn chắc chắn muốn ẩn các bình luận đã chọn ?')">
            <input type="submit" name="btn-deletes-c" class="btn btn-outline-dark" value="Xóa tất cả ô đã chọn" onclick="return confirm('Bạn chắc chắn muốn xóa các bình luận đã chọn ?')">
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

        let bodyTable = document.getElementById("body-listComment");
        let selectRate = document.getElementById("selectRate");
        let selectStatus = document.getElementById("selectStatus");
        let trListComment = document.querySelectorAll(".trListComment");

        function locSp(selectRate, selectStatus, list, classRate, classStatus, view) {
            selectRate.onchange = selectStatus.onchange = function() {
                let htmlText = '';
                for (let i = 0; i < list.length; i++) {
                    let rate = list[i].querySelector(classRate).innerText;
                    let status = list[i].querySelector(classStatus).innerText;

                    if ((rate == selectRate.value || selectRate.value == 0) &&
                        (status == selectStatus.value || selectStatus.value == 0)) {
                        htmlText += list[i].outerHTML;
                    }
                }
                view.innerHTML = htmlText;
            }
        }

        locSp(selectRate, selectStatus, trListComment, ".rateId", ".statusId", bodyTable);


    </script>