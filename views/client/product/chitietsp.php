<div class="container-xxl">
    <div class="collections row mt-5 px-5">
        <div class="col-7 collections-img">
            <div class="">
                <img src="<?= $pathUpload . $pro['pro_img'] ?>" alt="" class="width:100%;">
                <div class="border img-child-client filtering">
                    <?php foreach ($listImg as $img) : ?>
                        <div class="img-con">
                            <img src="<?= $pathUpload . $img['img'] ?>" style="width: 100%;height: auto;" alt="">
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
            <div class="mota mt-4">
                <div class="mota-title">
                    <h3>Mô tả sản phẩm</h3>
                    <p> -><?= $pro['pro_desc'] ?></p>
                </div>
            </div>
            <div class="comment">
                <div class="comment-title">
                    <h3>Comment</h3>
                </div>
                <div class="comment-form">
                    <?php
                    if ($mua) {
                        if (!$comment) {
                    ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <input type="radio" hidden class="reating_input" name="reating" value="1" id="1sao">
                                        <label class="fs-3" for="1sao"><i class=" reating fa-regular fa-star"></i></label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="radio" hidden class="reating_input" name="reating" value="2" id="2sao">
                                        <label class="fs-3" for="2sao"><i class=" reating fa-regular fa-star"></i></label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="radio" hidden class="reating_input" name="reating" value="3" id="3sao">
                                        <label class="fs-3" for="3sao"><i class=" reating fa-regular fa-star"></i></label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="radio" hidden class="reating_input" name="reating" value="4" id="4sao">
                                        <label class="fs-3" for="4sao"><i class=" reating fa-regular fa-star"></i></label>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="radio" checked hidden class="reating_input" name="reating" value="5" id="5sao">
                                        <label class="fs-3" for="5sao"><i class=" reating fa-regular fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="img" type="file" id="formFile">
                                </div>
                                <div class="content_comment d-flex">
                                    <input type="text" name="desc" placeholder="Nhập comment ...." required>
                                    <button type="submit" class="btn btn-dark" name="btn-add-comment">Đăng</button>
                                </div>
                            </form>
                    <?php
                        }
                    }
                    ?>
                </div>

                <div class="comment-show">
                    <?php
                    if ($comment) {
                    ?>
                        <p>Bình luận của bạn</p>
                        
                        <div class="comment-show-item">
                            <div class="comment-show-item-user">
                                <div>
                                    <img src="<?=$pathUpload.$_SESSION['user']['u_img']?>" alt="">
                                </div>
                                <div class="comment-show-item-user-name">
                                    <p><?=$_SESSION['user']['u_fullname']==""?$_SESSION['user']['u_username']:$_SESSION['user']['u_fullname']?> <span style="color: blue;font-weight: 500;"><?=$userComment['com_status']!=1?"  (comment đã bị ẩn)":''?></span></p>
                                    <span><?=$userComment['com_date']?></span>
                                </div>
                            </div>
                            <div class="comment-show-item-text d-flex align-items-end">
                                <div>
                                    <p class="pb-1"><?=$userComment['com_reating']?> <i class="fa-solid fa-star"></i></p>
                                    <p class="pb-1"><?=$userComment['com_content']?></p>
                                    <img style="width:100px;height:auto" src="<?=$pathUpload.$userComment['com_img']?>" alt="">
                                </div>
                                <div>
                                    <a class="mx-3" href="<?=$clientUrl."comment/delete&idpro=".$pro['id']."&id=".$userComment['id']?>">xóa</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <hr>
                    <p>Danh sách bình luận</p>
                    <?php foreach($dsComment as $cm): ?>
                    <div class="comment-show-item">
                        <div class="comment-show-item-user">
                            <div>
                                <img src="<?=$pathUpload.$cm['user_img']?>" alt="">
                            </div>
                            <div class="comment-show-item-user-name">
                                <p><?=$cm['user']?></p>
                                <span><?=$cm['date']?></span>
                            </div>
                        </div>
                        <div class="comment-show-item-text">
                            <p class="pb-1"><?=$cm['reating']?> <i class="fa-solid fa-star"></i></p>
                            <p class="pb-1"><?=$cm['text']?></p>
                            <img style="width:100px;height:auto" src="<?=$pathUpload.$cm['img']?>" alt="">
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="col-5 collections-product">
            <div class="collections-product-show">
                <div class="title">
                    <h2><?= $pro['pro_name'] ?></h2>
                    <p> Danh mục:
                        <?php
                        foreach ($listCat as $cat) {
                            echo $cat['cat_name'] . ",";
                        }
                        ?>
                    </p>
                    <span class="price">Giá : <?= isset($proOne['pp_price']) ? number_format($proOne['pp_price']) : number_format($proPP['minprice']) . "đ -> " . number_format($proPP['maxprice']) . "đ" ?></span>
                </div>
                <p>Đã bán : <span style="font-weight: bold;"><?= $proOne['pp_buys'] ?? $proPP['total_buys'] ?></span></p>
                <div class="cate">
                    <div class="cate-color">
                        <p>Phân loại : </p>
                        <?php foreach ($phanloai as $pl) : ?>
                            <a href="<?= $clientUrl . "chitietsp&id=" . $pro['id'] . "&color=" . $pl['pp_color'] ?>" class="px-2 btn btn-outline-dark <?= $color == $pl['pp_color'] ? 'togger' : '' ?>"><?= $pl['pp_color'] ?></a>
                        <?php endforeach ?>
                    </div>
                    <div class="cate-size">
                        <p>Cấu hình : </p>
                        <?php foreach ($cauhinh as $ch) : ?>
                            <a href="<?= $clientUrl . "chitietsp&id=" . $pro['id'] . "&color=" . $color . "&memory=" . $ch['pp_memory'] ?>" class="btn btn-outline-dark <?= $memory == $ch['pp_memory'] ? 'togger' : '' ?>"><?= $ch['pp_memory'] ?></a>
                        <?php endforeach ?>
                    </div>
                    <form action="<?= $clientUrl . "cart" ?>" class="form_count my-3" method="post">
                        <div class="cate-count">
                            <p>Số lượng : <b class="soluongsanpham"><?= $soluongOne ?? $proPP['total_count'] ?></b></p>
                            <div class="range">
                                <div class="field">
                                    <div class=" value left">
                                        1
                                    </div>
                                    <input type="range" name="count" class="span-input" min="1" max="<?= $proOne['pp_count'] ?? $proPP['total_count'] ?>" value="1" steps="1">
                                    <div class=" value right">
                                        <?= $proOne['pp_count'] ?? $proPP['total_count'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="idpp" value="<?= $proOne['id'] ?>">
                        <input type="hidden" name="idpro" value="<?= $pro['id'] ?>">
                        <button type="submit" name="btn-add-cart" class="btn btn-lg btn-dark <?= isset($proOne['id'])&&$soluongOne!='Hết hàng' ? '' : 'nonclick' ?>">Thêm vào giỏ hàng</button>
                    </form>
                </div>

                <div class="description border p-3">
                    <h5>Thông số kĩ thuật: </h5>
                    <table class="table table-striped">
                        <?php foreach ($listThongSo as $ts) : ?>
                            <tr>
                                <td style="width: 150px;"><?= $ts['name'] ?>:</td>
                                <td><?= $ts['value'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>

            </div>


        </div>
    </div>

</div>
<div class="container mt-4 p-4">
    <h3 class="p-4">Sản phẩm cùng danh mục</h3>
    <div class="new-product p-4">
        <?php
        foreach ($listSpLq as $key => $splq) :
        ?>
            <h3><?= $key ?></h3>
            <div class="list">
                <?php
                foreach ($splq as $pro) :
                    foreach ($listProPP as $pp) :
                        if ($pp['pp_proid'] == $pro['id']) :
                ?>
                            <div class="card" style="width: 15rem">
                                <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <a href="<?= $clientUrl . "chitietsp&id=" . $pro['id'] ?>">
                                        <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
                                    </a>
                                    <div class="card-views">
                                        <p class="card-text"><?= number_format($pp['minprice']) . " -> " . number_format($pp['maxprice']) . " (vnđ)" ?> </p>
                                        <span>Lượt mua : <?= $pp['total_buys'] ?></span>
                                    </div>
                                    <div class="card-views d-flex justify-content-between">
                                        <span>Lượt xem: <?= $pro['pro_views'] ?></span>
                                        <span>Số lượng: <?= $pp['total_count'] ?></span>
                                    </div>
                                    <a href="<?= $clientUrl . "chitietsp&id=" . $pro['id'] ?>" class="btn btn-outline-primary">Mua ngay</a>
                                </div>
                            </div>
                <?php
                        endif;
                    endforeach;
                endforeach;
                ?>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
<script type="text/javascript">
    // ranger
    const inputSlider = document.querySelector(".span-input");
    inputSlider.oninput = (() => {
        let value = inputSlider.value;
        document.querySelector(".soluongsanpham").innerHTML = value;
    });

    // reating
    let reating = document.querySelectorAll(".reating");
    let reatingInput = document.querySelectorAll(".reating_input");
    for (let i = 0; i < reating.length; i++) {
        reating[i].onclick = function() {
            for (let rt = 0; rt < reating.length; rt++) {
                reatingInput[rt].checked = false;
                if (reating[rt].classList.contains('fa-solid')) {
                    reating[rt].classList.remove('fa-solid');
                    reating[rt].classList.add('fa-regular');
                }
            }
            reatingInput[i].checked = true;
            for (let rt = 0; rt <= i; rt++) {
                if (!reating[rt].classList.contains('fa-solid')) {
                    reating[rt].classList.remove('fa-regular');
                    reating[rt].classList.add('fa-solid');
                }
            }
        }
    }
</script>