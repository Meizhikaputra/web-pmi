<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('siang')) : ?>
        <?= $this->session->flashdata('siang'); ?>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('user/tambahpendonor'); ?>" class="btn btn-primary mb-4">Tambah Data Pendonor</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url('user/pendonor'); ?>" method="post">
                <div class="input-group mb-3 float-right">
                    <input type="text" class="form-control" placeholder="Cari Data Pendonor..." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pendonor</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Tanggal</th>
                <th scope="col">jam</th>
                <th scope="col">Dinas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pendonor as $ps) : ?>
                <?php if ($ps['nokantong'] == NULL) : ?>
                    <tr class="bg-warning" style="opacity: 100%;">
                    <?php else : ?>
                    <tr>
                    <?php endif; ?>


                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $ps['nama']; ?></td>
                    <td><?= $ps['golongandarah']; ?></td>
                    <td><?= date('d F Y', $ps['date_created']); ?></td>
                    <td><?= date('G:i:s', $ps['date_created']) ?></td>
                    <?php if ($ps['jam'] >= 8 && $ps['jam'] <= 16) : ?>
                        <td>Pagi</td>
                    <?php else : ?>
                        <td>Malam</td>
                    <?php endif; ?>
                    <td>
                        <a href="<?= base_url(); ?>user/detailpendonor/<?= $ps['id']; ?>" class="badge badge-primary">detail</a>
                        <a href="<?= base_url(); ?>user/ubahpendonor/<?= $ps['id']; ?>" class="badge badge-success">ubah</a>
                        <a href="<?= base_url(); ?>user/hapus/<?= $ps['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">hapus</a>
                    </td>

                    </tr>
                <?php endforeach; ?>

        </tbody>
    </table>
    <?= $this->pagination->create_links(); ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->