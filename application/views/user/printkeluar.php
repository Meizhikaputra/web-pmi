<!-- Begin Page Content -->
<div class="container-fluid" style="padding: 0 4cm 0 2cm;">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">1. Nama Pasien : <?= $keluar['nama']; ?></h3>
                    <p class="card-text">2. Golongan darah : <?= $keluar['golongandarah']; ?></p>
                    <p class="card-text">3. No kantong : <?= $keluar['nokantong']; ?></p>
                    <p class="card-text">4. Rumah sakit : <?= $keluar['rumahsakit']; ?></p>
                    <p class="card-text">5. Tanggal : <?= date('d F Y', $keluar['date_created']); ?></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        print();
    </script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->