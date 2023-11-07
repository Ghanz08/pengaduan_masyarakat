<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="/kodingan/frontend/img/profil.png" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 150px;">
                                    <h5 class="my-3">Sukmadika Jaya Purnama</h5>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a type="button" class="btn btn-outline-danger ms-1" href="">logout</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">


                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Sukmadika Jaya Purnama</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Lorem ipsum</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor telepon</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Lorem ipsum</p>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor NIK</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Lorem ipsum</p>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Lorem ipsum</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-3">
                                <!-- Tempat button klo nanti perlu button buat edit profil -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>


<?= $this->endSection(); ?>