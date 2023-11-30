<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Trang chủ</h2>
    <canvas id="myBarChart" width="400" height="200"></canvas>
    <div class="listTable"></div>
</div>
<script>
    $(document).ready(function() {
        function select_table(table) {
            $.ajax({
                url: "./ajax/ajaxHome.php",
                method: "POST",
                data: {
                    table: table,
                },
                success: function(data) {
                    dataArray = JSON.parse(data)
                    console.log(dataArray);
                    
                    var username = dataArray.map(function(item) {
                        return item.username;
                    });

                    var total = dataArray.map(function(item) {
                        return item.total;
                    });

                    var data = {
                        labels: username,
                        datasets: [{
                            label: 'Biểu đồ danh thu top 10 khách hàng tiềm năng',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            data: total
                        }]
                    };

                    var ctx = document.getElementById('myBarChart').getContext('2d');
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                },
            });
        }
        select_table("userTiemNang");
    });
</script>