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
                                <th scope="col">#</th>
                                <th scope="col">nama</th>
                                <th scope="col">nik</th>
                                <th scope="col">Password</th>
                                <th scope="col">no.telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sukmadika jaya purnama</td>
                                <td>24434</td>
                                <td>Sigma dulu ges</td>
                                <td>911</td>
                            </tr>
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