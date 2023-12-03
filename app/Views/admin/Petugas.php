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
                    <?php if ($session->has('level') && strtolower(trim($session->get('level'))) == 'admin'): ?>
                        <!-- Button code for admin -->
                        <a href="tambah" class="btn btn-primary">Buat Akun Petugas</a>
                    <?php endif; ?>
                    <div class="container mt-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">No.telp</th>
                                    <th scope="col">Level</th>
                                    <?php foreach ($petugas as $ptgs): ?>
                                        <?php if ($ptgs['level'] == 'admin'): ?>
                                            <th scope="col">Aksi Cepat</th>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1; ?>
                                <?php foreach ($petugas as $ptgs): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $counter++ ?>
                                        </th>
                                        <td>
                                            <?= $ptgs['nama_petugas'] ?>
                                        </td>
                                        <td>
                                            <?= $ptgs['username'] ?>
                                        </td>
                                        <td>
                                            <?= $ptgs['password'] ?>
                                        </td>
                                        <td>
                                            <?= $ptgs['telepon'] ?>
                                        </td>
                                        <td>
                                            <?php if ($ptgs['level'] == 'admin'): ?>
                                                <button type="button" class="btn btn-secondary" disabled>Admin</button>
                                            <?php endif; ?>
                                            <?php if ($ptgs['level'] == 'petugas'): ?>
                                                <button type="button" class="btn btn-secondary" disabled>Petugas</button>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($ptgs['level'] == 'petugas'): ?>
                                                <a href="<?= site_url("admin/edit/{$ptgs['id_petugas']}"); ?>"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="<?= site_url("admin/delete/{$ptgs['id_petugas']}"); ?>"
                                                    class="btn btn-danger">Delete</a>
                                            <?php endif; ?>
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
<?php else: ?>
    <!-- Message for non-petugas users -->
    <div class="page-wrapper alert alert-danger text-center" role="alert">
        You can't access this page due to your level.
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>