<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>

<?php
$this->session = session();
$session = session()
    ?>
<?php if ($session->has('level') && strtolower(trim($session->get('level'))) == 'admin'): ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form class="mt-4 mb-4" action="generate" method="post" onsubmit="openInNewTab('generate')">
                        <select class="form-select form-select-md mb-3" aria-label="Large select example" name="waktu">
                            <option value="hari" selected>Harian</option>
                            <option value="bulan">Bulanan</option>
                            <option value="tahun">Tahunan</option>
                            <option value="keseluruhan">Keseluruhan</option>
                        </select>

                        <select class="form-select form-select-md" aria-label="Small select example" name="status">
                            <option value="1" selected>Belum divalidasi</option>
                            <option value="2">Diterima</option>
                            <option value="3">Diproses</option>
                            <option value="4">Selesai</option>
                            <option value="5">Ditolak</option>
                            <option value="keseluruhan">Keseluruhan</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-4">Generate</button>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->


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
<?php else: ?>
    <!-- Message for non-petugas users -->
    <div class="page-wrapper alert alert-danger text-center" role="alert">
        You can't access this page due to your level.
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>