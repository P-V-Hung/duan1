<footer>
  <section class="ncss-container">
    <div class="footer-content">
      <div class="footer-text">
        <h3>Hỗ trợ khách hàng</h3>
        <p>Thông tin liên hệ</p>
        <p>Hướng dẫn đặt hàng</p>
        <p>Hướng dẫn tạo tài khoản thành viên</p>
        <p>Chính sách giao hàng</p>
      </div>
      <div class="footer-text">
        <h3>Giới thiệu</h3>
        <p>Tin tức</p>
        <p>Nhà đầu tư</p>
        <p>nghề nghiệp</p>
        <p>sự vững bền</p>
      </div>
      <div class="footer-icon">
        <div class="footer-icon-items">
          <i class="fa-brands fa-facebook-f"></i>
        </div>
        <div class="footer-icon-items">
          <i class="fa-brands fa-youtube"></i>
        </div>
        <div class="footer-icon-items">
          <i class="fa-brands fa-instagram"></i>
        </div>
      </div>
    </div>
  </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('.filtering').slick({
    slidesToShow: 4,
    slidesToScroll: 4
  });

  var filtered = false;

  $('.js-filter').on('click', function() {
    if (filtered === false) {
      $('.filtering').slick('slickFilter', ':even');
      $(this).text('Unfilter Slides');
      filtered = true;
    } else {
      $('.filtering').slick('slickUnfilter');
      $(this).text('Filter Slides');
      filtered = false;
    }
  });
</script>
</body>

</html>