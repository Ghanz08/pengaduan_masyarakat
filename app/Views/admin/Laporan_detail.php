<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>
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
                        <div class="text-center">
                            <img src="/public/assets/images/big/img1.jpg" alt="Report Image" width="80%">
                        </div>

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
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <p></p>
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
                            <div class="mb-3" style="width: 100%; height: 100%; flex-shrink: 0; border-radius: 10px; background: #FFCA7B; ">
                                <p>Ini isinya</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tanggapi
                            </button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Beri Tanggapan</label>
                    <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        
    </div>
</div>
<?= $this->endSection(); ?>