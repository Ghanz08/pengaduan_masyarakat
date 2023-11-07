<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body>

  <div class="p-5 mb-4 bg-danger ">
    <div class="container-fluid py-5">
      <div class="row">
        <div class="col">
          <h1 class="fw-bold text-light display-4">Layanan Pengaduan Masyarakat Online</h1>
          <p class="text-light">Sampaikan masalah anda disini, kami akan memprosesnya dengan cepat</p>
        </div>
        <div class="col">
          <img class="" style="width: 500px; margin-left: 40px; margin-bottom: -133.5px;" src="/kodingan/frontend/img/Group 1.png"
            alt="">
        </div>
      </div>

      <a class="btn btn-md text-light" type="button"
        style="background: #C10000; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);" href="/masyarakat/form">Laporkan!</a>
    </div>
  </div>
  <div>
    <div class="container">
      <div class="row">
        <div class="col">
          <a style="text-decoration: none;" href="/masyarakat/form">
            <div class="card" style="width: 18rem;">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <p class="text-center text-danger">
                    <i class="bi bi-pen" style="font-size: 100px;"></i>
                  </p>
                  <h5 class="card-title text-center">Tulis laporan</h5>
                  <p class="card-text text-center">Tulis keluhan anda dengan jelas</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a style="text-decoration: none;" href="/masyarakat/laporan_anda">
            <div class="card" style="width: 18rem;">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <p class="text-center text-danger">
                    <i class="bi bi-file-text" style="font-size: 100px;"></i>
                  </p>
                  <h5 class="card-title text-center">Laporan anda</h5>
                  <p class="card-text text-center">Lihat progress anda dengan jelas</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a style="text-decoration: none;" href="/masyarakat/form">
            <div class="card" style="width: 18rem;">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <p class="text-center text-danger">
                    <i class="bi bi-pen" style="font-size: 100px;"></i>
                  </p>
                  <h5 class="card-title text-center">Tulis laporan</h5>
                  <p class="card-text text-center">Tulis keluhan anda dengan jelas</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a style="text-decoration: none;" href="">
            <div class="card" style="width: 18rem;">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <p class="text-center text-danger">
                    <i class="bi bi-pen" style="font-size: 100px;"></i>
                  </p>
                  <h5 class="card-title text-center">Tulis laporan</h5>
                  <p class="card-text text-center">Tulis keluhan anda dengan jelas</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>


</body>

</html>

<?= $this->endSection(); ?>