<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    </head>

    <body>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <?php $hari = date('d'); ?>

        <h3 class="h1 text-danger">Chart Darah Masuk</h3>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                Tahun
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('/admin/filter/') . date('Y'); ?>"><?= date('Y'); ?></a>
                <a class="dropdown-item" href="<?= base_url('/admin/filter/2021'); ?>">2021</a>
                <a class="dropdown-item" href="<?= base_url('/admin/filter/2020'); ?>">2020</a>
            </div>
            <a href="<?= base_url('admin/printFilter/') . $year; ?>" class="btn badge-info"><i class="fa fa-print"></i> Print</a>
        </div>






        <script type="text/javascript">
            window.onload = function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Masuk Tahun <?= $year ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Januari",
                                y: <?= $jan; ?>
                            },
                            {
                                label: "Februari",
                                y: <?= $feb; ?>
                            },
                            {
                                label: "Maret",
                                y: <?= $mar; ?>
                            },
                            {
                                label: "April",
                                y: <?= $apr; ?>
                            },
                            {
                                label: "Mei",
                                y: <?= $mei; ?>
                            },

                            {
                                label: "Juni",
                                y: <?= $jun; ?>
                            },

                            {
                                label: "Juli",
                                y: <?= $jul; ?>
                            },

                            {
                                label: "Agustus",
                                y: <?= $ags; ?>
                            },

                            {
                                label: "September",
                                y: <?= $sep; ?>
                            },

                            {
                                label: "Oktober",
                                y: <?= $okt; ?>
                            },

                            {
                                label: "November",
                                y: <?= $nov; ?>
                            },

                            {
                                label: "Desember",
                                y: <?= $des; ?>
                            }
                        ]
                    }]
                });


                chart.render();


                chart.render();

                // keluar1
                var chart = new CanvasJS.Chart("keluar1", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Keluar Tahun <?= $year; ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Januari",
                                y: <?= $jan2; ?>
                            },
                            {
                                label: "Februari",
                                y: <?= $feb2; ?>
                            },
                            {
                                label: "Maret",
                                y: <?= $mar2; ?>
                            },
                            {
                                label: "April",
                                y: <?= $apr2; ?>
                            },
                            {
                                label: "Mei",
                                y: <?= $mei2; ?>
                            },

                            {
                                label: "Juni",
                                y: <?= $jun2; ?>
                            },

                            {
                                label: "Juli",
                                y: <?= $jul2; ?>
                            },

                            {
                                label: "Agustus",
                                y: <?= $ags2; ?>
                            },

                            {
                                label: "September",
                                y: <?= $sep2; ?>
                            },

                            {
                                label: "Oktober",
                                y: <?= $okt2; ?>
                            },

                            {
                                label: "November",
                                y: <?= $nov2; ?>
                            },

                            {
                                label: "Desember",
                                y: <?= $des2; ?>
                            }
                        ]
                    }]
                });


                chart.render();


            }
        </script>

        <div id="chartContainer" style="height: 370px; width: 100%;" class="mt-5"></div>
        <h3 class="h1 mt-5 text-danger">Chart Darah Keluar</h3>
        <div id="keluar1" style="height: 370px; width: 100%;" class="mt-5"></div>

        <script src="<?= base_url('assets/canvas/canvas.js'); ?>"> </script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->