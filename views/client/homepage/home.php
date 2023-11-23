<div class="container-xxl">
  <div class="banner">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://tse1.mm.bing.net/th?id=OIP.ugctw4soj6o8xOQ_Emlv8gHaDf&pid=Api&P=0&h=220" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://cdn-www.vinid.net/2020/08/789dc446-bannerweb_vsmart_1920x1080-1536x864.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="https://png.pngtree.com/png-clipart/20220823/original/pngtree-stereo-mobile-phone-camera-airplane-plant-summer-travel-planning-web-banners-png-image_8473386.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- content -->

  <div class="new-product">
    <h3>Sản phẩm mới</h3>
    <div class="list">
      <div class="card" style="width: 15rem">
        <img src="https://tse2.mm.bing.net/th?id=OIP.pyURm1mT9mYbPXTrNaJzcAHaHa&pid=Api&P=0&h=220" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Giay chat luonw</h5>
          <div class="card-views">
            <p class="card-text">200.000</p>
            <span>Lượt xem : 34</span>
          </div>
          <a href="" class="btn btn-outline-primary">Mua ngay</a>
        </div>
      </div>
      <div class="card" style="width: 15rem">
        <img src="https://tse2.mm.bing.net/th?id=OIP.pyURm1mT9mYbPXTrNaJzcAHaHa&pid=Api&P=0&h=220" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Giay chat luonw</h5>
          <div class="card-views">
            <p class="card-text">200.000</p>
            <span>Lượt xem : 34</span>
          </div>
          <a href="" class="btn btn-outline-primary">Mua ngay</a>
        </div>
      </div>
      <div class="card" style="width: 15rem">
        <img src="https://tse2.mm.bing.net/th?id=OIP.pyURm1mT9mYbPXTrNaJzcAHaHa&pid=Api&P=0&h=220" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Giay chat luonw</h5>
          <div class="card-views">
            <p class="card-text">200.000</p>
            <span>Lượt xem : 34</span>
          </div>
          <a href="" class="btn btn-outline-primary">Mua ngay</a>
        </div>
      </div>
      <div class="card" style="width: 15rem">
        <img src="https://tse2.mm.bing.net/th?id=OIP.pyURm1mT9mYbPXTrNaJzcAHaHa&pid=Api&P=0&h=220" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Giay chat luonw</h5>
          <div class="card-views">
            <p class="card-text">200.000</p>
            <span>Lượt xem : 34</span>
          </div>
          <a href="" class="btn btn-outline-primary">Mua ngay</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Các sản phẩm hot -->

  <div class="hot-product">
    <h1>Sản phẩm hot</h1>
    <div class="list">


      <?php
      foreach ($listHostProduct as $pro) :
        foreach ($listProPP as $pp) :
          if($pp['pp_proid'] == $pro['id']):
      ?>
          <div class="card" style="width: 15rem">
            <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="<?=$clientUrl."chitietsp&id=".$pro['id']?>">
                <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
              </a>
              <div class="card-views">
                <p class="card-text"><?=number_format($pp['minprice'])." -> ".number_format($pp['maxprice'])." (vnđ)"?> </p>
                <span>Lượt mua : <?=$pp['total_buys']?></span>
              </div>
              <div class="card-views d-flex justify-content-between">
                <span>Lượt xem: <?=$pro['pro_views']?></span>
                <span>Số lượng: <?=$pp['total_count']?></span>
              </div>
              <a href="<?=$clientUrl."chitietsp&id=".$pro['id']?>" class="btn btn-outline-primary">Mua ngay</a>
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

<!-- footer -->