<?php
$dateLabels = [];
$countAccount = [];

$listAccount = AccountAll(['COUNT(*) as total_accounts', 'DATE(u_create) as account_date'], "u_create >= NOW() - INTERVAL 6 day GROUP BY account_date ORDER BY account_date DESC");

$last7Days = [];
for ($i = 6; $i >= 0; $i--) {
    $last7Days[date('Y-m-d', strtotime("-$i days"))] = 0;
}

foreach ($listAccount as $account) {
    $last7Days[$account['account_date']] = (int)$account['total_accounts'];
}

foreach ($last7Days as $date => $count) {
    $dateLabels[] = date('d-m', strtotime($date));
    $countAccount[] = $count;
}
$totalAcc=0;
for($i=0;$i<count($countAccount);$i++){
    $totalAcc += $countAccount[$i];
}
?>

<div class="chartAccount p2-5 mt-5">
    <canvas id="myChartAccount" style="width:100%;max-width:600px"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
const xAccValues = <?php echo json_encode($dateLabels); ?>;
const yAccValues = <?php echo json_encode($countAccount); ?>;
const totalAcc = <?php echo $totalAcc ?>

new Chart("myChartAccount", {
    type: "line",
    data: {
        labels: xAccValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yAccValues
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 0, precision: 0 } }],
        },
        title: {
            display: true,
            text: "Số tài khoản mới trong 7 ngày gần nhất (Tổng:"+totalAcc+")",
        }
    }
});
</script>