<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>

<?php
$this->session = session();
$session = session()
    ?>
<div class="page-wrapper">

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="container mt-4">
            <article>
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Laporan
                                        anda</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="diterima-tab" data-bs-toggle="tab"
                                        data-bs-target="#diterima" type="button" role="tab" aria-controls="diterima"
                                        aria-selected="true">Diterima</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile"
                                        aria-selected="true">Diproses</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                        type="button" role="tab" aria-controls="contact"
                                        aria-selected="true">Selesai</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col" class="text-center">Isi laporan</th>
                                                <th scope="col" class="text-center">Status</th>
                                                <?php if (isset($pengaduan[0]) && $pengaduan[0]['status'] != 5): ?>
                                                    <th scope="col" class="text-center">Aksi cepat</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pengaduan as $report): ?>
                                                <tr class="text-center">
                                                    <td>
                                                        <?= $report['id_pengaduan']; ?>
                                                    </td>
                                                    <td scope="col" class="text-center">
                                                        <?= $report['judul_pengaduan']; ?>
                                                    </td>
                                                    <td scope="col" class="text-center">
                                                        <?= $report['tanggal_pengaduan']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= site_url("/admin/tanggapi/{$report['id_pengaduan']}"); ?>"
                                                            class="btn btn-warning">Detail laporan</a>
                                                    </td>
                                                    <td scope="col" class="text-center">
                                                        <?php if ($report['status'] == 1): ?>
                                                            <button type="button" class="btn btn-secondary"
                                                                disabled>Menunggu</button>
                                                        <?php endif; ?>
                                                        <?php if ($report['status'] == 5): ?>
                                                            <button type="button"
                                                                class="btn btn-danger disabled">Ditolak</button>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td scope="col" class="text-center">
                                                        <div class="text-center">
                                                            <?php if ($report['status'] != 5): ?>
                                                                <a href="<?= site_url("admin/diterima/{$report['id_pengaduan']}"); ?>"
                                                                    class="btn btn-warning">Terima</a>
                                                                <a href="<?= site_url("admin/ditolak/{$report['id_pengaduan']}"); ?>"
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Apakah kamu yakin ingin menolak laporan ini?')">Tolak</a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="diterima" role="tabpanel" aria-labelledby="diterima-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col" class="text-center">Isi laporan</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Aksi cepat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($diterima as $report): ?>
                                            <tr class="text-center">
                                                <td>
                                                    <?= $report['id_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['judul_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['tanggal_pengaduan']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url("/admin/tanggapi/{$report['id_pengaduan']}"); ?>"
                                                        class="btn btn-warning">Detail laporan</a>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?php if ($report['status'] == 2): ?>
                                                        <button type="button" class="btn btn-secondary"
                                                            disabled>Diterima</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <div class="text-center">
                                                        <?php if ($report['status'] == 2): ?>
                                                            <a href="<?= site_url("/admin/tanggapi/{$report['id_pengaduan']}"); ?>"
                                                                class="btn btn-warning">Beri Tanggapan</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col" class="text-center">Isi laporan</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Aksi cepat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 1; ?>
                                        <?php foreach ($diproses as $report): ?>
                                            <tr class="text-center">
                                                <td>
                                                    <?= $report['id_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['judul_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['tanggal_pengaduan']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url("/admin/tanggapi/{$report['id_pengaduan']}"); ?>"
                                                        class="btn btn-warning">Detail laporan</a>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?php if ($report['status'] == 3): ?>
                                                        <button type="button" class="btn btn-secondary"
                                                            disabled>Diproses</button>
                                                    <?php endif; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <div class="text-center">
                                                        <?php if ($report['status'] == 3): ?>
                                                            <a href="<?= site_url("/admin/selesai/{$report['id_pengaduan']}"); ?>"
                                                                class="btn btn-warning">Selesai</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col" class="text-center">Isi laporan</th>
                                            <th scope="col" class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($selesai as $report): ?>
                                            <tr class="text-center">
                                                <td>
                                                    <?= $report['id_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['judul_pengaduan']; ?>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?= $report['tanggal_pengaduan']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url("/admin/tanggapi/{$report['id_pengaduan']}"); ?>"
                                                        class="btn btn-warning">Detail laporan</a>
                                                </td>
                                                <td scope="col" class="text-center">
                                                    <?php if ($report['status'] == 4): ?>
                                                        <button type="button" class="btn btn-success"
                                                            disabled><b>Selesai</b></button>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </article>

        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

</div>

<?= $this->endSection(); ?>