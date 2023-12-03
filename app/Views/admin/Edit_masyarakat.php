<?= $this->extend('Layout/Base_admin'); ?>

<?= $this->section('content'); ?>

<?php
$this->session = session();
$session = session()
    ?>
    <body>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-7">
                        <div class="card d-flex my-5" style="rgba(0, 0, 0, 0.25);">
                            <div class="row">
                                <div class="col-md-4  p-5">
                                    <div
                                        style="display: flex; align-items: center; justify-content: center; margin-top: -48px; margin-left: -38px; margin-bottom: -48.5px; width: 100%; height: 230px; flex-shrink: 0; border-radius: 10px 0px 0px 10px; background: #00A5CF;">
                                        <p class="text-center fs-4 fw-bolder" style="color: #ffff;">Reset Password Masyarakat </br><?= $masyarakat['nama'] ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                $session = session();
                                $error = $session->getFlashdata('error');
                                ?>

                                <?php if ($error) { ?>
                                    <p style="color:red">Terjadi Kesalahan:
                                    <ul>
                                        <?php foreach ($error as $e) { ?>
                                            <li>
                                                <?php echo $e ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    </p>
                                <?php } ?>
                                <div class="col px-4 pt-3" style="margin-left: -90px; ">
                                    <form action="<?= base_url('admin/update_masyarakat/' . $masyarakat['id_masyarakat']) ?>" method="post"
                                        enctype="multipart/form-data">
                                        <div>
                                            <p>Reset Password</p>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col" style="">
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Password" aria-label="password"
                                                        aria-describedby="basic-addon1">
                                                </div>
                                                <div class="col" style="">
                                                    <input type="password" class="form-control" name="confirm"
                                                        placeholder="Repeat Password" aria-label="repeat-password"
                                                        aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end " style="margin-right: 10px;">
                                            <button type="submit" style="background: #00A5CF"
                                                class="btn btn-md mt-4">Reset</button>
                                        </div>
                                    </form>
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