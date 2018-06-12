<?php
foreach ($siswa as $row) {
    $jumlah[]  =$row->jumlah;
}
?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                    <canvas id="myChart"></canvas>
                </div>
            </div>                

            <!--/.col-->
        </div>
        <!--/.row-->
    </div>

</div>
<script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels:<?php echo json_encode($jumlah) ?>,
            datasets: [{
                    label: "jumlah data siswa",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
        },

        // Configuration options go here
        options: {}
    });
</script>
