<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <head>
        <form method="GET">
            <div class="row">
                <div class="col-2">
                    <div class="input-group">
                        <input type="date" name="date_start" placeholder="input tanggal awal" value="<?= set_value('date_start'); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-fw fa-calendar-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group">
                        <input type="date" name="date_ended" placeholder="input tanggal akhir" value="<?= set_value('date_ended'); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-fw fa-calendar-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <button type="submit" class="btn btn-success">Search<i class="fas fa-fw fa-search"></i></button>
                </div>
        </form>
    </head>

    <body>
        <div class="container">
            <canvas id="myChart" style="margin-top:10px;"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
        <script type="text/javascript">
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Sangat Puas', 'Cukup puas', 'Kurang puas'],
                    datasets: [{
                        data: [<?php
                                if (count($graph) > 0) {
                                    foreach ($graph as $data) {
                                        echo $data->total_pol . ", ";
                                    }
                                }
                                ?>],
                        backgroundColor: ['#3cb372', '#ffd600', '#e91e63'],
                        borderWidth: 0.5,
                        borderColor: '#ddd'
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Indeks Kepuasan Masyarakat',
                        position: 'top',
                        fontSize: 16,
                        fontColor: '#111',
                        padding: 20
                    },
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            boxWidth: 20,
                            fontColor: '#111',
                            padding: 20
                        }
                    },
                    tooltips: {
                        enabled: true
                    },
                    plugins: {
                        datalabels: {
                            color: '#111',
                            textAlign: 'center',
                            font: {
                                lineHeight: 1.6
                            },
                            formatter: function(value, ctx) {
                                return value + '';
                            }
                        }
                    }
                }
            });
        </script>
    </body>

</div>