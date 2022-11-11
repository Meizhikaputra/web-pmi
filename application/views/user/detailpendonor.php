<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="<?= base_url('user/print/') . $pendonor['id']; ?>" class="btn badge-info mb-3"><i class="fa fa-print"></i> Print</a>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Nama Pendonor : <?= $pendonor['nama']; ?></h5>
                    <p class="card-text">Jenis kelamin : <?= $pendonor['jeniskelamin']; ?></p>
                    <p class="card-text">Langgal lahir : <?= $pendonor['tanggallahir']; ?></p>
                    <p class="card-text">Alamat rumah : <?= $pendonor['alamatrumah']; ?></p>
                    <p class="card-text">No telepon : <?= $pendonor['notelepon']; ?></p>
                    <p class="card-text">Golongan darah : <?= $pendonor['golongandarah']; ?></p>
                    <p class="card-text">Donor Yang Ke : <?= $pendonor['donorkeberapa']; ?></p>
                    <p class="card-text">Macam donor : <?= $pendonor['macamdonor']; ?></p>
                    <p class="card-text">Tekanan darah : <?= $pendonor['tekanandarah']; ?></p>
                    <p class="card-text">Berat badan : <?= $pendonor['beratbadan']; ?></p>
                    <p class="card-text">Rhesus : <?= $pendonor['rhesus']; ?></p>
                    <p class="card-text">Ditolak : <?= $pendonor['ditolak']; ?></p>
                    <p class="card-text">No kantong : <?= $pendonor['nokantong']; ?></p>
                    <p class="card-text">Tempat donor : <?= $pendonor['tempatdonor']; ?></p>
                    <p class="card-text">Tanggal : <?= date('d F Y', $pendonor['date_created']); ?></p>
                    <a href="<?= base_url('user/pendonorsiang') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->