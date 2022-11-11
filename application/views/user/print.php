<!-- Begin Page Content -->
<div class="container-fluid" style="padding: 0 4cm 0 2cm;">

    <!-- Page Heading -->
    <h1>Data Pendonor dengan Nama : <?= $pendonor['nama']; ?></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">1. Nama Pendonor : <?= $pendonor['nama']; ?></h3>
                    <p class="card-text">2. Jenis kelamin : <?= $pendonor['jeniskelamin']; ?></p>
                    <p class="card-text">3. anggal lahir : <?= $pendonor['tanggallahir']; ?></p>
                    <p class="card-text">4. Alamat rumah : <?= $pendonor['alamatrumah']; ?></p>
                    <p class="card-text">5. No telepon : <?= $pendonor['notelepon']; ?></p>
                    <p class="card-text">6. Golongan darah : <?= $pendonor['golongandarah']; ?></p>
                    <p class="card-text">7. Donor Yang Ke : <?= $pendonor['donorkeberapa']; ?></p>
                    <p class="card-text">8. Macam donor : <?= $pendonor['macamdonor']; ?></p>
                    <p class="card-text">9. Tekanan darah : <?= $pendonor['tekanandarah']; ?></p>
                    <p class="card-text">10. Berat badan : <?= $pendonor['beratbadan']; ?></p>
                    <p class="card-text">11. Rhesus : <?= $pendonor['rhesus']; ?></p>
                    <p class="card-text">12. Ditolak : <?= $pendonor['ditolak']; ?></p>
                    <p class="card-text">13. No kantong : <?= $pendonor['nokantong']; ?></p>
                    <p class="card-text">14. Tempat donor : <?= $pendonor['tempatdonor']; ?></p>
                    <p class="card-text">15. Tanggal : <?= date('d F Y', $pendonor['date_created']); ?></p>
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