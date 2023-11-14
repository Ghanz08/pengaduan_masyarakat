<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body>
  <?php 
  $this->session = session(); 
  $session = session()
  ?>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-7">
          <div class="card d-flex my-5" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
            <div class="row">
              <div class="col-md-4  p-5">
                <div style="
                        margin-top: -48px;
                        margin-left: -38px;
                        margin-bottom: -48.5px;
                          width: 100%;
                          height: 650px;
                          flex-shrink: 0;
                          border-radius: 10px 0px 0px 10px;
                          background: #C33333;

                          

                          "></div>

              </div>
              <div class="col px-4 pt-3" style="margin-left: -90px;">
              <form action="/pengaduan/store" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <input type="text" placeholder="Judul laporan anda" class="form-control" name="judul_pengaduan">
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" placeholder="Isi laporan anda" name="isi_laporan" id="" cols="30"
                      rows="10"></textarea>
                  </div>
                  <div class="mb-3">
                    <input placeholder="Tanggal pengaduan" type="text" class="form-control" name="tanggal_pengaduan" onfocus="(this.type='date')">
                  </div>
                  <div class="mb-3">
                    <input type="text" placeholder="Lokasi kejadian" name="lokasi_kejadian" class="form-control">
                  </div>
                  <div class="mb-3">
                  <div class="input-group mb-3">
                      <label class="input-group-text" for="nik">NIK</label>
                    <input type="text" value="<?= $session->nik ?>" id="foto" class="form-control" name="nik" readonly>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="foto">Upload gambar</label>
                      <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                  </div>

                  <div class="text-end " style="margin-right: 10px;">
                    <button type="submit" class="btn btn-md btn-danger mt-4">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>

  <?= $this->endSection(); ?>