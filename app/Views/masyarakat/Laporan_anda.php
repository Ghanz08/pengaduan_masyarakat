<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>
<?php
$this->session = session();
$session = session()
  ?>

<body style="background-color: rgba(249, 249, 249, 1);">
  <div class="container mt-4">
    <article>
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Laporan anda</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="diterima-tab" data-bs-toggle="tab" data-bs-target="#diterima" type="button"
                role="tab" aria-controls="diterima" aria-selected="true">Diterima</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="true">Diproses</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="true">Selesai</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col" class="text-center">Isi laporan</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Aksi cepat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pengaduan as $report): ?>
                    <tr class="text-center">
                      <td>
                        <?= $report['id_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $report['judul_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $report['tanggal_pengaduan']; ?>
                      </td>
                      <td>
                        <a href="<?= site_url("/masyarakat/detail/{$report['id_pengaduan']}"); ?>"
                          class="btn btn-warning">Detail laporan</a>
                      </td>
                      <td scope="col" class="text-center">
                        <?php if ($report['status'] == 1): ?>
                          <button type="button" class="btn btn-secondary" disabled>Menunggu</button>
                        <?php endif; ?>
                        <?php if ($report['status'] == 5): ?>
                          <button type="button" class="btn btn-danger disabled">Ditolak</button>
                        <?php endif; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <div class="text-center">
                          <?php if ($report['status'] == 1): ?>
                            <a href="<?= site_url("pengaduan/edit/{$report['id_pengaduan']}"); ?>"
                              class="btn btn-warning">Edit</a>
                            <a href="<?= site_url("pengaduan/delete/{$report['id_pengaduan']}"); ?>" class="btn btn-danger"
                              onclick="return confirm('Are you sure you want to delete this report?')">Delete</a>
                          <?php endif; ?>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="diterima" role="tabpanel" aria-labelledby="diterima-tab">
            <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col" class="text-center">Isi laporan</th>
                    <th scope="col" class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($diterima as $trma): ?>
                    <tr class="text-center">
                      <td>
                        <?= $trma['id_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $trma['judul_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $trma['tanggal_pengaduan']; ?>
                      </td>
                      <td>
                        <a href="<?= site_url("/masyarakat/detail/{$trma['id_pengaduan']}"); ?>"
                          class="btn btn-warning">Detail laporan</a>
                      </td>
                      <td scope="col" class="text-center">
                        <?php if ($trma['status'] == 2): ?>
                          <button type="button" class="btn btn-secondary" disabled>Diterima</button>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Judul</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Isi laporan</th>
                    <th scope="col" class="text-center">Lokasi Kejadian</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Aksi cepat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($diproses as $prss): ?>
                    <tr>
                      <td scope="col" class="text-center">
                        <?= $prss['id_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $prss['judul_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $prss['tanggal_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $prss['isi_laporan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $prss['lokasi_kejadian']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?php if ($prss['foto']): ?>
                          <img src="<?= base_url('uploads/' . $prss['foto']); ?>" alt="Report Image" width="100">
                        <?php else: ?>
                          No Image
                        <?php endif; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $prss['status']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <div class="text-center">
                          <a href="<?= site_url("pengaduan/edit/{$prss['id_pengaduan']}"); ?>"
                            class="btn btn-warning">Edit</a>
                          <a href="<?= site_url("pengaduan/delete/{$prss['id_pengaduan']}"); ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this report?')">Delete</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Judul</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Isi laporan</th>
                    <th scope="col" class="text-center">Lokasi Kejadian</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Aksi cepat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($selesai as $slsi): ?>
                    <tr>
                      <td scope="col" class="text-center">
                        <?= $slsi['id_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $slsi['judul_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $slsi['tanggal_pengaduan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $slsi['isi_laporan']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $slsi['lokasi_kejadian']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?php if ($slsi['foto']): ?>
                          <img src="<?= base_url('uploads/' . $slsi['foto']); ?>" alt="Report Image" width="100">
                        <?php else: ?>
                          No Image
                        <?php endif; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <?= $slsi['status']; ?>
                      </td>
                      <td scope="col" class="text-center">
                        <div class="text-center">
                          <a href="<?= site_url("pengaduan/edit/{$slsi['id_pengaduan']}"); ?>"
                            class="btn btn-warning">Edit</a>
                          <a href="<?= site_url("pengaduan/delete/{$slsi['id_pengaduan']}"); ?>" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this report?')">Delete</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </article>

  </div>



</body>

</html>

<?= $this->endSection(); ?>