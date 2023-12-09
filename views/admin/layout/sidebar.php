<div class="sidebar">
        <div>
          <div class="sidebar-logo d-flex justify-content-center align-items-center">
            <svg
              aria-hidden="true"
              class="pre-logo-svg"
              focusable="false"
              viewBox="0 0 24 24"
              role="img"
              width="100px"
              height="100px"
              fill="#fff"
            >
              <path
                fill="#fff"
                fill-rule="evenodd"
                d="M21 8.719L7.836 14.303C6.74 14.768 5.818 15 5.075 15c-.836 0-1.445-.295-1.819-.884-.485-.76-.273-1.982.559-3.272.494-.754 1.122-1.446 1.734-2.108-.144.234-1.415 2.349-.025 3.345.275.2.666.298 1.147.298.386 0 .829-.063 1.316-.19L21 8.719z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </div>

          <div class="sidebar-menu">
            <a href="<?=$adminUrl."/"?>">
              <div class="sidebar-menu-header">
                <p>Trang chủ</p>
              </div>
            </a>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    Quản lý danh mục
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."category/list"?>">Danh sách danh mục</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    Quản lí sản phẩm
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."product/list"?>">Danh sách sản phẩm</a></li>
                      <li><a href="<?=$adminUrl."product/add"?>">Thêm sản phẩm</a></li>
                      <li><a href="<?=$adminUrl."product/property/list"?>">Danh sách thuộc tính SP</a></li>
                      <li><a href="<?=$adminUrl."product/hotproduct"?>">Sản phẩm bán chạy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-six"
                    aria-expanded="false"
                    aria-controls="flush-six"
                  >
                    Quản lí bình luận
                  </button>
                </h2>
                <div
                  id="flush-six"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."comment/list"?>">Danh sách bình luận</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    Quản lí đơn hàng
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."bill/list"?>">Danh sách đơn hàng</a></li>
                      <!-- <li><a href="">Thêm loại hàng</a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-four"
                    aria-expanded="false"
                    aria-controls="flush-four"
                  >
                    Quản lí tài khoản
                  </button>
                </h2>
                <div
                  id="flush-four"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."account/list"?>">Danh sách tài khoản</a></li>
                      <li><a href="<?=$adminUrl."account/add"?>">Thêm tài khoản</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-five"
                    aria-expanded="false"
                    aria-controls="flush-five"
                  >
                    Quản lí mã giảm giá
                  </button>
                </h2>
                <div
                  id="flush-five"
                  class="accordion-collapse collapse"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <ul>
                      <li><a href="<?=$adminUrl."voucher/list"?>">Danh sách mã giảm giá</a></li>
                      <li><a href="<?=$adminUrl."voucher/add"?>">Thêm mã giảm giá</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <a style="text-decoration:none;" href="<?=$adminUrl."chart/chart"?>">
              <div class="sidebar-menu-header">
                <p>Thống kê</p>
              </div>
            </a>
            </div>
          </div>
        </div>
        <div class="sidebar-end p-0">
          <ul>
            <li class="p-0"><a class="btn py-3 ps-0" style="width:100%;height:100%" href="/"><- Trang web</a></li>
          </ul>
        </div>
      </div>