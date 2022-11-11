<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <h4>Biodata</h4>

    <div class="row mt-3">
        <div class="col-md-6">

            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama Pendonor</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggallahir">Tanggal lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                    <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="alamatrumah">Alamat rumah</label>
                    <input type="text" class="form-control" id="alamatrumah" name="alamatrumah">
                    <?= form_error('alamatrumah', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="notelepon">No telepon</label>
                    <input type="text" class="form-control" id="notelepon" name="notelepon">
                    <?= form_error('notelepon', '<small class="text-danger">', '</small>'); ?>
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
                    <label for="donorkeberapa">Donor yang ke</label>
                    <input type="text" class="form-control" id="donorkeberapa" name="donorkeberapa">
                    <?= form_error('donorkeberapa', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="macamdonor">Macam donor</label>
                    <select class="form-control" id="macamdonor" name="macamdonor">
                        <option>Sukarela</option>
                        <option>Rutin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tekanandarah">Tekanan darah</label>
                    <input type="text" class="form-control" id="tekanandarah" name="tekanandarah">
                    <?= form_error('tekanandarah', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="rhesus">Rhesus</label>
                    <select class="form-control" id="rhesus" name="rhesus">
                        <option>+</option>
                        <option>-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="beratbadan">Berat badan</label>
                    <input type="text" class="form-control" id="beratbadan" name="beratbadan">
                    <?= form_error('beratbadan', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="ujisaring">Uji saring</label>
                    <select class="form-control" id="ujisaring" name="ujisaring">
                        <option>BAIK</option>
                        <option>HIV</option>
                        <option>Hbsag</option>
                        <option>HCV</option>
                        <option>TPAH</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ditolak">Ditolak</label>
                    <input type="text" class="form-control" id="ditolak" name="ditolak">
                </div>
                <div class="form-group">
                    <label for="nokantong">No kantong</label>
                    <input type="text" class="form-control" id="nokantong" name="nokantong">
                    <?= form_error('nokantong', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tempatdonor">Tempat donor</label>
                    <input type="text" class="form-control" id="tempatdonor" name="tempatdonor">
                    <?= form_error('tempatdonor', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->