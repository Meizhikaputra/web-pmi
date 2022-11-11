<!-- Begin Page Content -->
<div class="container-fluid print" style="padding: 0 200px 0 20px;">


    <!-- Page Heading -->
    </head>

    <body>
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <?php $hari = date('d'); ?>

        <h1>Hasil Laporan Chart Tahun <?= date('Y'); ?></h1>



        <script type="text/javascript">
            window.onload = function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Masuk Tahun <?= date('Y'); ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Januari",
                                y: <?= $this->db->get_where('data_pendonor', ['bulan' => 1])->num_rows(); ?>
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



                // 2
                var chart = new CanvasJS.Chart("bulan", {
                    theme: "light2", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Masuk Bulan <?= date('M'); ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Minggu Ke-1",
                                y: <?= $m1; ?>
                            },
                            {
                                label: "Minggu Ke-2",
                                y: <?= $m2; ?>
                            },
                            {
                                label: "Minggu ke-3",
                                y: <?= $m3; ?>
                            },
                            {
                                label: "Minggu ke-4",
                                y: <?= $m4; ?>
                            }
                        ]
                    }]
                });


                chart.render();
                chart.render();

                var chart = new CanvasJS.Chart("hari", {
                    theme: "light2", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Jumlah Pendonor Hari Ini"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                            label: "Pendonor Hari ini",
                            y: <?= $this->db->get_where('data_pendonor', ['tanggal' => date('d')])->num_rows(); ?>
                        }]
                    }]
                });



                chart.render();
                chart.render();

                // keluar1
                var chart = new CanvasJS.Chart("keluar1", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Keluar Tahun <?= date('Y'); ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Januari",
                                y: <?= $this->db->get_where('darah_keluar', ['bulan' => 1])->num_rows(); ?>
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
                chart.render();

                // keluar2

                var chart = new CanvasJS.Chart("keluar2", {
                    theme: "light2", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Darah Keluar Bulan <?= date('M'); ?>"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Minggu Ke-1",
                                y: <?= $m1Q; ?>
                            },
                            {
                                label: "Minggu Ke-2",
                                y: <?= $m2Q; ?>
                            },
                            {
                                label: "Minggu ke-3",
                                y: <?= $m3Q; ?>
                            },
                            {
                                label: "Minggu ke-4",
                                y: <?= $m4Q; ?>
                            }
                        ]
                    }]
                });
                chart.render();
                chart.render();

                // Keluar 3

                var chart = new CanvasJS.Chart("keluar3", {
                    theme: "light2", // "light2", "dark1", "dark2"
                    animationEnabled: true, // change to true		
                    title: {
                        text: "Jumlah Darah Keluar Ini"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                            label: "Pendonor Hari ini",
                            y: <?= $this->db->get_where('darah_keluar', ['tanggal' => date('d')])->num_rows(); ?>
                        }]
                    }]
                });



                chart.render();
                chart.render();
            }
        </script>



        <div id="chartContainer" style="height: 370px; width: 100%;" class="mt-5"></div>
        <div id="bulan" style="height: 370px; width: 100%;" class="mt-5"></div>
        <div id="hari" style="height: 370px; width: 100%;" class="mt-5"></div>
        <h3 class="h1 mt-5 text-danger">Chart Darah Keluar</h3>
        <div id="keluar1" style="height: 370px; width: 100%;" class="mt-5"></div>
        <div id="keluar2" style="height: 370px; width: 100%;" class="mt-5"></div>
        <div id="keluar3" style="height: 370px; width: 100%;" class="mt-5"></div>


        <script src="<?= base_url('assets/canvas/canvas.js'); ?>">
        </script>

        <script>
            print();
        </script>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->