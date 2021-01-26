<?php
function getRandomID()
{
    $char = "abcde";
    $random = null;
    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, strlen($char) - 1);
        $random .= $char[$index];
    }
    return $random;
}
?>
<div class="card-header">
    <h4>Statistik Agama</h4>
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
                        <?php
                        $array = null;
                        $query = $con->grup_by_agama();
                        if ($query->num_rows > 0) {
                            foreach ($query->fetch_all() as $data) {
                                $array .= "'" . $data['0'] . "', ";
                            }
                            echo ($array);
                        }
                        ?>
                    ],
                    backgroundColor: [
                        <?php
                        $array = null;
                        for ($i = 0; $i < $query->num_rows; $i++) {
                            $array .= "'#" . getRandomID() . "', ";
                        }
                        echo ($array);
                        ?>
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    <?php
                    $array = null;
                    $query = $con->grup_by_agama();
                    if ($query->num_rows > 0) {
                        foreach ($query->fetch_all() as $data) {
                            $array .= "'" . $data['1'] . "', ";
                        }
                        echo ($array);
                    }
                    ?>
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