<div class="right-sitebar container content-admin">
  <h2 class="py-4 title-admin">Danh sách danh mục</h2>
  <p class="textDanhMuc fs-5 ps-3 pb-3">
    <a href="<?= $adminUrl . "category/list&recat=0" ?>">Danh mục gốc</a>
    >
    <?php foreach ($_SESSION['categorys'] as $cat) : ?>
      <a href="<?= $adminUrl . "category/list&recat=0&id=" . $cat['id'] ?>"><?= $cat['cat_name'] ?></a>
      >
    <?php endforeach ?>
  </p>
  <div class="listdanhmuc">

    <?php foreach ($listCategory as $cat) : ?>
      <div class="danhmuc-admin border border-dark d-flex justify-content-between align-items-center py-1 px-2">
        <a href="<?= $adminUrl . "category/list&id=" . $cat['id'] ?>" class="fs-5"><i class="fa-solid fa-plus me-3 ms-1"></i><?= $cat['cat_name'] ?></a>
        <div class="danhmuc-thaotac d-flex">
          <a href="<?= $adminUrl . "category/update&id=" . $cat['id'] ?>" class="me-2">Sửa</a>
          <a onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')" href="<?= $adminUrl . "category/delete&id=" . $cat['id'] ?>">Xóa</a>
        </div>
      </div>

    <?php endforeach ?>

  </div>
</div>