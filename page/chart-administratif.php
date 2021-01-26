<div class="card-header">
    <h4>Statistik Administratif</h4>
</div>
<div class="card-body">
    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        <?php echo ($con->count_data_dusun()); ?>,
                        <?php echo ($con->count_data_rt()); ?>,
                        <?php echo ($con->count_data_rw()); ?>
                    ],
                    backgroundColor: [
                        '#191d21',
                        '#63ed7a',
                        '#ffa426',
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    'Data Dusun',
                    'Data RT',
                    'Data RW'
                ],
            },
            options: {
                responsive: true,
                legend: {
                    position: 'left',
                },
            }
        });
    </script>
</div>