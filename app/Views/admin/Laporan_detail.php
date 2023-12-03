<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>

<?php
$this->session = session();
$session = session()
    ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- disini img -->
                        <?php if ($pengaduan): ?>
                            <?php if ($pengaduan['foto']): ?>
                                <div class="text-center">
                                    <img src="<?= base_url('uploads/' . $pengaduan['foto']); ?>" alt="Report Image" width="80%">
                                </div>

                            <?php else: ?>
                                No Image
                            <?php endif; ?>

                            <div style="width: 573px; background: #000; height: 1px; margin-top: 25px;">

                            </div>
                            <div class="pt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <p>Judul Laporan</p>
                                        <p>Tanggal laporan</p>
                                        <p>Lokasi</p>
                                        <p>Isi laporan</p>
                                    </div>
                                    <div class="col-1" style="margin-left: -20px;">
                                        <p>:</p>
                                        <p>:</p>
                                        <p>:</p>
                                        <p>:</p>

                                    </div>

                                    <div class="col" style="margin-left: -30px;">
                                        <p>
                                            <?= $pengaduan['judul_pengaduan']; ?>
                                        </p>
                                        <p>
                                            <?= $pengaduan['tanggal_pengaduan']; ?>
                                        </p>
                                        <p>
                                            <?= $pengaduan['lokasi_kejadian']; ?>
                                        </p>
                                        <p>
                                            <?= $pengaduan['isi_laporan']; ?>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h2>Tanggapan</h2>
                            </div>
                            <div>
                                <?php foreach ($tanggapan as $pngdn): ?>
                                    <?php if ($pngdn['status'] == 3 && $pngdn['id_pengaduan']): ?>
                                        <div class="mb-3"
                                            style="width: 100%; height: 100%; flex-shrink: 0; border-radius: 10px; background: #FFCA7B; ">
                                            <p style="margin-inline-start: 2% ;">
                                                <?= $pngdn['tanggapan']; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php if (in_array($pengaduan['status'], [1, 2]) && $pengaduan['id_pengaduan']): ?>
                                    <div class="mb-3"
                                        style="width: 100%; height: 100%; flex-shrink: 0; border-radius: 10px; background: #FFCA7B; ">
                                        <p style="margin-inline-start: 2% ;">
                                            Belum ada tanggapan
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <?php if ($pengaduan['status'] == 5): ?>
                                    <div class="mb-3"
                                        style="width: 100%; height: 100%; flex-shrink: 0;  border-radius: 10px; background: #ff4a4a; ">
                                        <p style="margin-inline-start: 2% ;">
                                            <b>Laporan Ini Sudah Ditolak</b>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="text-end">
                                <?php if ($pengaduan['status'] == 1): ?>
                                    <a href="<?= site_url("admin/diterima/{$report['id_pengaduan']}"); ?>"
                                        class="btn btn-warning">Terima</a>
                                    <a href="<?= site_url("admin/ditolak/{$report['id_pengaduan']}"); ?>" class="btn btn-danger"
                                        onclick="return confirm('Apakah kamu yakin ingin menolak laporan ini?')">Tolak</a>
                                <?php endif; ?>
                                <?php if ($pengaduan['status'] == 2): ?>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal<?= $pengaduan['id_pengaduan'] ?>">
                                        Tanggapi
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- Modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?= $pengaduan['id_pengaduan'] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/tanggapan/' . $pengaduan['id_pengaduan']) ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Tanggapan" name="tanggapan" id="exampleInputEmail1"
                                aria-describedby="emailHelp"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">ID Pengaduan</label>
                            <input type="text" value="<?= $pengaduan['id_pengaduan'] ?>" name="id_pengaduan"
                                class="form-control" id="id_pengaduan" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">ID Petugas</label>
                            <input type="text" value="<?= $session->id_petugas ?>" name="id_petugas" class="form-control"
                                id="id_pengaduan" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>