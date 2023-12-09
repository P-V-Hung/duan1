<?php 
    $dateLabels = [];
    $countBill = [];
    
    $listBill = BillAll(['COUNT(*) as total_bill', 'DATE(bill_create) as bill_date'], "bill_status = 1 AND bill_create >= NOW() - INTERVAL 6 day GROUP BY bill_date ORDER BY bill_date DESC");
    
    $last7Days = [];
    for ($i = 6; $i >= 0; $i--) {
        $last7Days[date('Y-m-d', strtotime("-$i days"))] = 0;
    }
    
    foreach ($listBill as $bill) {
        $last7Days[$bill['bill_date']] = (int)$bill['total_bill'];
    }
    
    foreach ($last7Days as $date => $count) {
        $dateLabels[] = date('d-m', strtotime($date));
        $countBill[] = $count;
    }
    $totalBill = 0;
    for($i=0;$i<count($countBill);++$i) {
        $totalBill += $countBill[$i];
    }
    $numColors = count($last7Days);
    $barColors = [];  //Mảng chứa màu sắc
  
    for ($i = 0; $i < $numColors; $i++) {
      $randomColor = '#' . dechex(rand(0x000000, 0xFFFFFF));
      $barColors[] = $randomColor;
    }
?>
<div class="chartBill p2-5 mt-5">
    <canvas id="myChartBill" style="width:100%;max-width:600px"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
const xBillValues = <?php echo json_encode($dateLabels); ?>;
const yBillValues = <?php echo json_encode($countBill); ?>;
const barBillColors = <?php echo json_encode($barColors); ?>;
const totalBill = <?php echo $totalBill ?>;

new Chart("myChartBill", {
  type: "bar",
  data: {
    labels: xBillValues,
    datasets: [{
      backgroundColor: barBillColors,
      data: yBillValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Số lượng đơn đặt hàng mới trong 7 ngày gần nhất (Tổng:"+totalBill+")"
    },
    scales: {
            yAxes: [{ ticks: { min: 0, precision: 0 } }],
        }
  }
});
</script>