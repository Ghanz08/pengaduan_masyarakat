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
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Laporan anda</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Diproses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true">Selesai</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col" class="text-center">Isi laporan</th>
                                        <th scope="col" class="text-center">Lokasi Kejadian</th>
                                        <th scope="col" class="text-center">Gambar</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Aksi cepat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengaduan as $report) : ?>
                                        <tr>
                                            <td>
                                                <?= $report['id_pengaduan']; ?>
                                            </td>
                                            <td>
                                                <?= $report['judul_pengaduan']; ?>
                                            </td>
                                            <td>
                                                <?= $report['tanggal_pengaduan']; ?>
                                            </td>
                                            <td>
                                                <?= $report['nik']; ?>
                                            </td>
                                            <td>
                                                <?= $report['isi_laporan']; ?>
                                            </td>
                                            <td>
                                                <?= $report['lokasi_kejadian']; ?>
                                            </td>
                                            <td>
                                                <?php if ($report['foto']) : ?>
                                                    <img src="<?= base_url('uploads/' . $report['foto']); ?>" alt="Report Image" width="100">
                                                <?php else : ?>
                                                    No Image
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?= $report['status']; ?>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="<?= site_url("pengaduan/edit/{$report['id_pengaduan']}"); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?= site_url("pengaduan/delete/{$report['id_pengaduan']}"); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this report?')">Delete</a>
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
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col" class="text-center">Detail dari laporan anda</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>lorem ipsum</td>
                                        <td>lorem ipsum</td>
                                        <td class="text-center">
                                            <p>Lihat detail dan proses dari laporan anda</p>
                                            <a type="button" class="btn btn-primary btn-sm">Klik disini</a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Isi laporan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>lorem ipsum</td>
                                        <td>lorem ipsum</td>
                                        <td><button type="button" class="btn btn-primary btn-sm">Lihat detail</button></td>

                                    </tr>
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