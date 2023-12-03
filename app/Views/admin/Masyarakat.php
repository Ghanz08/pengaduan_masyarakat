<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>

<?php
$this->session = session();
$session = session()
    ?>
<div class="page-wrapper">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">NIK</th>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center" class="text-center">Password</th>
                                <th scope="col" class="text-center">No.telp</th>
                                <th scope="col" class="text-center">Reset Password</th>
                                <th scope="col" class="text-center">Aksi Cepat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            <?php foreach ($masyarakat as $msyrkt): ?>
                                <tr>
                                    <th scope="row" class="text-center">
                                        <?= $counter++ ?>
                                    </th>
                                    <td class="text-center">
                                        <?= $msyrkt['nik'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $msyrkt['nama'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $msyrkt['password'] ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $msyrkt['telepon'] ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= site_url("admin/edit_masyarakat/{$msyrkt['id_masyarakat']}"); ?>"
                                            class="btn btn-primary"><i class="fa-solid fa-rotate"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= site_url("admin/delete_masyarakat/{$msyrkt['id_masyarakat']}"); ?>"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
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

<?= $this->endSection(); ?>