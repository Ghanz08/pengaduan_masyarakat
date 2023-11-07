<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body>

<body>
  <div class="container-fluid" >
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-7" >
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
                      <form>
                        <div class="mb-3">
                          <input type="text" placeholder="Judul laporan anda" class="form-control">
                        </div>
                        <div class="mb-3">
                          <textarea class="form-control" placeholder="Isi laporan anda" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                         <input placeholder="Tanggal kejadian" type="text" class="form-control" onfocus="(this.type='date')">
                        </div>
                        <div class="mb-3">
                          <input type="text" placeholder="Lokasi kejadian" class="form-control">
                        </div>
                        <div class="mb-3">
                          <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Pilih Kategori laporan</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload gambar</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
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