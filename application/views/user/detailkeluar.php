<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="<?= base_url('user/printkeluar/') . $keluar['id']; ?>" class="btn badge-info mb-3"><i class="fa fa-print"></i> Print</a>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nama Pasien : <?= $keluar['nama']; ?></h5>
                    <p class="card-text">Golongan darah : <?= $keluar['golongandarah']; ?></p>
                    <p class="card-text">No kantong : <?= $keluar['nokantong']; ?></p>
                    <p class="card-text">Rumah sakit : <?= $keluar['rumahsakit']; ?></p>
                    <p class="card-text">Tanggal : <?= date('d F Y', $keluar['date_created']); ?></p>
                    <a href="<?= base_url('user/darahkeluar'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->