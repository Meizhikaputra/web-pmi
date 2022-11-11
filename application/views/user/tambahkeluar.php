<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="golongandarah">Golongan darah</label>
                    <select class="form-control" id="golongandarah" name="golongandarah">
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rumahsakit">Rumah sakit</label>
                    <input type="text" class="form-control" id="rumahsakit" name="rumahsakit">
                    <?= form_error('rumahsakit', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nokantong">No kantong</label>
                    <input type="text" class="form-control" id="nokantong" name="nokantong">
                    <?= form_error('nokantong', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Ambil Darah</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->