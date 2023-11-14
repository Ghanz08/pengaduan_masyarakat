<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body style="background-color: rgba(249, 249, 249, 1);">
    <div class="container mt-4">
        <article>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div>
                            <div style="
                        width: 634px;
                        height: 20px;
                        flex-shrink: 0;
                        border-radius: 5px 5px 0px 0px;
                        background: #E83B3B;
                  "></div>
                        </div>
                        <div class="card-body">
                        <?php foreach ($pengaduan as $report): ?>
                            <?php if ($report['foto']): ?>
                                <div class="text-center">
                                    <img src="<?= base_url('uploads/' . $report['foto']); ?>" alt="Report Image" width="80%">
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
                                        <p><?= $report['judul_pengaduan']; ?></p>
                                        <p> <?= $report['tanggal_pengaduan']; ?></p>
                                        <p> <?= $report['lokasi_kejadian']; ?></p>
                                        <p><?= $report['isi_laporan']; ?></p>
                                    </div>
                                </div>
                                <div class="text-end">
                                     <a href="/masyarakat/laporan_anda" class="btn btn-danger">Kembali</a>
                                </div>
                               
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div>
                            <div style="
                        width: 634px;
                        height: 20px;
                        flex-shrink: 0;
                        border-radius: 5px 5px 0px 0px;
                        background: #E83B3B;
                  "></div>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <h2>Tanggapan</h2>
                            </div>
                            <div>
                                <div class="mb-3" style="width: 100%; height: 100%; flex-shrink: 0; border-radius: 10px; background: #FFCA7B; ">
                                    <p class="pt-1 pb-1" style="margin-left: 5px; margin-right: 5px;">Tunggu sampai laporan anda diterima, maka admin akan menanggapi laporan anda</p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>


        </article>

    </div>



</body>

</html>

<?= $this->endSection(); ?>