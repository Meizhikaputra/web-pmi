<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Stok Darah</h1>

    <div class="row">
        <div class="col-lg-10">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Darah A</h5>
                    <p class="card-text"><?= $A; ?></p>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Darah B</h5>
                    <p class="card-text"><?= $B; ?></p>
                </div>
            </div>
            <div class="card text-white bg-warning mb-3 " style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Darah AB</h5>
                    <p class="card-text"><?= $AB; ?></p>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Darah O</h5>
                    <p class="card-text"><?= $O; ?></p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('keluar')) : ?>
        <?= $this->session->flashdata('keluar'); ?>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('user/tambahkeluar'); ?>" class="btn btn-primary mb-4">Ambil Darah</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3 float-right">
                    <input type="text" class="form-control" placeholder="Cari Data Pendonor..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">No Kantong</th>
                <th scope="col">Rumah sakit</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($darah_keluar as $dk) : ?>

                <tr>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $dk['nama']; ?></td>
                    <td><?= $dk['golongandarah']; ?></td>
                    <td><?= $dk['nokantong']; ?></td>
                    <td><?= $dk['rumahsakit']; ?></td>
                    <td><?= date('d F Y', $dk['date_created']); ?></td>
                    <td>
                        <a href="<?= base_url(); ?>user/detailkeluar/<?= $dk['id']; ?>" class="badge badge-primary">detail</a>
                        <a href="<?= base_url(); ?>user/ubahkeluar/<?= $dk['id']; ?>" class="badge badge-success">ubah</a>
                        <a href="<?= base_url(); ?>user/hapuskeluar/<?= $dk['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">hapus</a>
                    </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <?= $this->pagination->create_links(); ?>

</div>
<!-- /.container-fluid -->