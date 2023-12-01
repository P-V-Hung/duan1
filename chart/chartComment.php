<?php
$dateLabels = [];
for ($i = 6; $i >= 0; $i--) {
    $dateLabels[] = date('Y-m-d', strtotime("-$i days"));
}

$listCom = CommentAll(['DATE(com_date) as com_date, com_reating, COUNT(*) as comment_count'], "com_date >= CURDATE() - INTERVAL 6 DAY GROUP BY com_date, com_reating ORDER BY com_date DESC;");

$currentDate = date('Y-m-d');

// Tính ngày 7 ngày trước
$sevenDaysAgo = date('Y-m-d', strtotime('-7 days', strtotime($currentDate)));

// Tạo mảng để lưu trữ số lượng bình luận của mỗi ngày
$commentCountByDate = array();

// Điền giá trị 0 cho các ngày không có bình luận
for ($i = 0; $i < 7; $i++) {
    $date = date('Y-m-d', strtotime("-$i days", strtotime($currentDate)));
    foreach ($listCom as $com) {
        if ($com['com_date'] == $date) {
            $commentCountByDate[$date][] = $com;
        }
    }
}
for ($i = 0; $i < 7; $i++) {
    $date = date('Y-m-d', strtotime("-$i days", strtotime($currentDate)));
    if (!array_key_exists($date, $commentCountByDate)) {
        $commentCountByDate[$date][] = 0;
    }
}
ksort($commentCountByDate);

$SumReating = [];
$newCom = [];
$sao1 = [];
$sao2 = [];
$sao3 = [];
$sao4 = [];
$sao5 = [];
foreach($commentCountByDate as $key => $date){
    $tongSao =0;
    $Onesao = 0;
    $Twosao = 0;
    $Treesao = 0;
    $Forsao = 0;
    $Fivesao = 0;
    foreach($date as $chitiet){
        $reating = $chitiet['com_reating'] ?? 0;
        switch($reating){
            case 1:{
                $Onesao++;
                $tongSao++;
                break;
            }
            case 2:{
                $Twosao++;
                $tongSao++;
                break;
            }
            case 3:{
                $Treesao++;
                $tongSao++;
                break;
            }
            case 4:{
                $Forsao++;
                $tongSao++;
                break;
            }
            case 5:{
                $Fivesao++;
                $tongSao++;
                break;
            }
            case 0:{
                break;
            }
        }
    }
    $SumReating[] = $tongSao;
    $sao1[] = $Onesao;
    $sao2[] = $Twosao;
    $sao3[] = $Treesao;
    $sao4[] = $Forsao;
    $sao5[] = $Fivesao;
}

?>
[
]

<div class="chartCategory p2-5 mt-5">
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
window.onload = function() {

    var dateLabels = <?php echo json_encode($dateLabels); ?>;
    var newComData = <?php echo json_encode(array_values($SumReating)); ?>;
    var sao1Data = <?php echo json_encode(array_values($sao1)); ?>;
    var sao2Data = <?php echo json_encode(array_values($sao2)); ?>;
    var sao3Data = <?php echo json_encode(array_values($sao3)); ?>;
    var sao4Data = <?php echo json_encode(array_values($sao4)); ?>;
    var sao5Data = <?php echo json_encode(array_values($sao5)); ?>;


    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        title: {
            text: "Thống kê bình luận trong 7 ngày gần nhất"
        },
        axisY: {
            title: "Số lượng"
        },
        toolTip: {
            shared: true
        },
        legend: {
            cursor: "pointer",
            itemclick: toggleDataSeries
        },
        data: [{
                type: 'spline',
                name: 'Bình luận mới',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, newComData)
            },
            {
                type: 'spline',
                name: '★',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, sao1Data)
            },
            {
                type: 'spline',
                name: '★★',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, sao2Data)
            },
            {
                type: 'spline',
                name: '★★★',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, sao3Data)
            },
            {
                type: 'spline',
                name: '★★★★',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, sao4Data)
            },
            {
                type: 'spline',
                name: '★★★★★',
                showInLegend: true,
                dataPoints: generateDataPoints(dateLabels, sao5Data)
            }
        ]
    });

    chart.render();

    function toggleDataSeries(e) {
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        chart.render();
    }

    function generateDataPoints(labels, data) {
        var dataPoints = [];
        for (var i = 0; i < labels.length; i++) {
            dataPoints.push({
                label: labels[i],
                y: data[i]
            });
        }
        return dataPoints;
    }

}
</script>