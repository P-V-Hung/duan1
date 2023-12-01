<?php 
  $listIdCat = ProCatAll(); //Lấy các id danh mục có sản phẩm
  $lengthIdCat = count($listIdCat); //Độ dài mảng
  $uniqueIds = [];  //Mảng chứa id danh mục (không bị lặp lại)
  $idCount = [];  //Mảng kết hợp chứa số lượng sản phẩm của từng danh mục

  // Lọc danh mục tồn tại trong CSDL
  foreach ($listIdCat as $item) {
    $currentId = $item["pc_idcat"];

    $listCat = CategoryFind("id = " . $currentId);

    if ($listCat) {
      if (!in_array($currentId, $uniqueIds)) {
        $uniqueIds[] = $currentId;
      }

      if (!isset($idCount[$currentId])) {
        $idCount[$currentId] = 1;
      } else {
        $idCount[$currentId]++;
      }
    }
  }

  $catName = [];  //Mảng chứa tên danh mục
  foreach ($uniqueIds as $idCat) {
    $listCat = CategoryFind("id = ".$idCat);
    $catName[] = $listCat["cat_name"];
  }

  $countInfo = []; //Mảng chứa mảng con với mỗi phần tử là một mảng chỉ chứa số lượng sản phẩm
  foreach ($idCount as $id => $count) {
    $countInfo[] = [$count];
  }

  // Random màu
  $numColors = count($countInfo);
  $barColors = [];  //Mảng chứa màu sắc

  for ($i = 0; $i < $numColors; $i++) {
    $randomColor = '#' . dechex(rand(0x000000, 0xFFFFFF));
    $barColors[] = $randomColor;
  }

?>
<div class="chartCatPro p2-5 mt-5">
    <canvas id="myChartCatPro" style="width:100%;max-width:600px"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
const xCatProValues = <?php echo json_encode($catName); ?>;
const yCatProValues = <?php echo json_encode($countInfo); ?>;
const barCatProColors = <?php echo json_encode($barColors); ?>;

new Chart("myChartCatPro", {
  type: "doughnut",
  data: {
    labels: xCatProValues,
    datasets: [{
      backgroundColor: barCatProColors,
      data: yCatProValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Thống kê danh mục theo sản phẩm"
    }
  }
});
</script>