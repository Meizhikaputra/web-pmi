<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('delete'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pegawai as $p) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><img src="<?= base_url('assets/img/profile/') . $p['image']; ?>" class="rounded float-left" width="50px" height="40px"></td>
                            <td><?= $p['name']; ?></td>
                            <td><a href="<?= base_url('admin/deleteuser/') . $p['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin Ingin Menghapus');">Delete</a></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->