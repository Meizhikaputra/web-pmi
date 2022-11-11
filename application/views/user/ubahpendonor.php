<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pendonor['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Pendonor</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pendonor['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis kelamin</label>
                    <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                        <?php foreach ($jeniskelamin as $j) : ?>
                            <?php if ($j == $pendonor['jeniskelamin']) : ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggallahir">Tanggal lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $pendonor['tanggallahir']; ?>">
                    <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="alamatrumah">Alamat rumah</label>
                    <input type="text" class="form-control" id="alamatrumah" name="alamatrumah" value="<?= $pendonor['alamatrumah']; ?>">
                    <?= form_error('alamatrumah', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="notelepon">No telepon</label>
                    <input type="text" class="form-control" id="notelepon" name="notelepon" value="<?= $pendonor['notelepon']; ?>">
                    <?= form_error('notelepon', '<small class="text-danger">', '</small>'); ?>
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
                    <label for="donorkeberapa">Donor yang ke</label>
                    <input type="text" class="form-control" id="donorkeberapa" name="donorkeberapa" value="<?= $pendonor['donorkeberapa']; ?>">
                    <?= form_error('donorkeberapa', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="macamdonor">Macam donor</label>
                    <select class="form-control" id="macamdonor" name="macamdonor">
                        <?php foreach ($macamdonor as $m) : ?>
                            <?php if ($m == $pendonor['macamdonor']) : ?>
                                <option value="<?= $m; ?>" selected><?= $m; ?></option>
                            <?php else : ?>
                                <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <h1 class="h3 mb-4 text-gray-800">Diisi Sesudah Tes Kesehatan!</h1>
                <div class="form-group">
                    <label for="tekanandarah">Tekanan darah</label>
                    <input type="text" class="form-control" id="tekanandarah" name="tekanandarah" value="<?= $pendonor['tekanandarah']; ?>">
                    <?= form_error('tekanandarah', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="rhesus">Rhesus</label>
                    <select class="form-control" id="rhesus" name="rhesus">
                        <?php foreach ($rhesus as $r) : ?>
                            <?php if ($r == $pendonor['rhesus']) : ?>
                                <option value="<?= $r; ?>" selected><?= $r; ?></option>
                            <?php else : ?>
                                <option value="<?= $r; ?>"><?= $r; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="beratbadan">Berat badan</label>
                    <input type="text" class="form-control" id="beratbadan" name="beratbadan" value="<?= $pendonor['beratbadan']; ?>">
                    <?= form_error('beratbadan', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="ujisaring">Uji saring</label>
                    <select class="form-control" id="ujisaring" name="ujisaring">
                        <?php foreach ($ujisaring as $u) : ?>
                            <?php if ($u == $pendonor['ujisaring']) : ?>
                                <option value="<?= $u; ?>" selected><?= $u; ?></option>
                            <?php else : ?>
                                <option value="<?= $u; ?>"><?= $u; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ditolak">Ditolak</label>
                    <input type="text" class="form-control" id="ditolak" name="ditolak" value="<?= $pendonor['ditolak']; ?>">
                </div>
                <div class="form-group">
                    <label for="nokantong">No kantong</label>
                    <input type="text" class="form-control" id="nokantong" name="nokantong" value="<?= $pendonor['nokantong']; ?>">
                    <?= form_error('nokantong', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tempatdonor">Tempat donor</label>
                    <input type="text" class="form-control" id="tempatdonor" name="tempatdonor" value="<?= $pendonor['tempatdonor']; ?>">
                    <?= form_error('tempatdonor', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->