<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

        <?= $this->include('layout/topnav'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Detail Peminjaman</h1>

            <!-- DataTales -->
            <div class="container mt-4">
                <form class="row g-1" action="/peminjaman/ubah/<?= $peminjaman['id_peminjaman'] ?>" method="post">
                    <div class="col-md-6 mt-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" value="<?= $peminjaman['kode'] ?>" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="admin" class="form-label">Nama Admin</label>
                        <input type="text" class="form-control" id="admin" value="<?= $admin['nama'] ?>" readonly>
                    </div>
                    <input type="hidden" name="id_anggota" value="<?= $peminjaman['id_anggota'] ?>">
                    <div class="col-md-6 mt-3">
                        <label for="nik" class="form-label">NIK Peminjam</label>
                        <input type="text" class="form-control" id="nik" value="<?= $anggota['nik'] ?>" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="nama" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama" value="<?= $anggota['nama'] ?>" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?>" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="tgt_kembali" class="form-label">Tenggat Pengembalian</label>
                        <input type="date" class="form-control" id="tgt_kembali" value="<?= $peminjaman['tgt_kembali'] ?>" readonly>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="denda" class="form-label">Denda</label>
                        <input type="number" class="form-control" id="denda" name="denda" placeholder="Besaran denda">
                    </div>
                    <div class="card shadow-sm mt-4 col-12 px-0">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Buku</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mt-4">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>ISBN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($daftar_buku as $i => $buku) { ?>
                                            <tr>
                                                <td><?= $i + 1 ?></td>
                                                <td><?= $buku['isbn'] ?></td>
                                                <td><?= $buku['judul'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4 text-center">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin konfirmasi pengembalian?')">Dikembalikan</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

<?= $this->endSection(); ?>