<div class="container">
  <div class="box-product">
    <form action="" method="post">
      <div class="box-product-left">
        <div class="product-cate">
          <h3>Danh mục</h3>
          <ul class="list-group list-group-flush">
            <button class="list-group-item list-group-item-action" name="btn-cate" value="0" type="submit">
              -> Danh mục gốc
            </button>
            <?php
            foreach ($listCats as $cat) :
            ?>
              <button class="list-group-item list-group-item-action" name="btn-cate" value="<?= $cat['id'] ?>" type="submit">
                <?= $cat['cat_name'] ?>
              </button>
            <?php
            endforeach
            ?>
          </ul>
        </div>
        <div class="list-group product-price">
          <h3>Khoảng giá</h3>
          <ul class="list-group list-group-flush">
            <button class="list-group-item list-group-item-action" name="btn-price" value="1" type="submit">
              1.000.000 - 4.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="2" type="submit">
              4.000.000 - 10.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="3" type="submit">
              10.000.000 - 15.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="4" type="submit">
              15.000.000 - 20.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="5" type="submit">
              20.000.000 - 25.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="6" type="submit">
              25.000.000 - 30.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="7" type="submit">
              30.000.000 - 35.000.000đ
            </button>
            <button class="list-group-item list-group-item-action" name="btn-price" value="8" type="submit">
              >35.000.000đ
            </button>
          </ul>
        </div>
      </div>
    </form>
    <div class="box-product-right">
      <div class="box-product-right-header">
        <div>
          <?php
          if (!empty($cate)) {
            echo "<p>Danh mục: <b>".$cate['cat_name']."</b></p>";
          }
          if (!empty($keyword)) {
            echo "<p>Từ khóa tìm kiếm: <b>$keyword</b></p>";
          }
          ?>
        </div>
      </div>
      <div class="box-product-right-content">
        <?php
        foreach ($listProducts as $pro) :
          foreach ($listPP as $pp) :
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
    </div>
  </div>
</div>
</div>