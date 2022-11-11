<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pendonor['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pendonor['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="golongandarah">Golongan darah</label>
                    <select class="form-control" id="golongandarah" name="golongandarah">
                        <?php foreach ($golongandarah as $g) : ?>
                            <?php if ($g == $pendonor['golongandarah']) : ?>
                                <option value="<?= $g; ?>" selected><?= $g; ?></option>
                            <?php else : ?>
                                <option value="<?= $g; ?>"><?= $g; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nokantong">No kantong</label>
                    <input type="text" class="form-control" id="nokantong" name="nokantong" value="<?= $pendonor['nokantong']; ?>">
                    <?= form_error('nokantong', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="rumahsakit">Rumah sakit</label>
                    <input type="text" class="form-control" id="rumahsakit" name="rumahsakit" value="<?= $pendonor['rumahsakit']; ?>">
                    <?= form_error('rumahsakit', '<small class="text-danger ">', '</small>'); ?>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->