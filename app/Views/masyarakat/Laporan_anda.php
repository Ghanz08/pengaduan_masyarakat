<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<body style="background-color: rgba(249, 249, 249, 1);">
    <div class="container mt-4">
        <article>
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Laporan anda</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Diproses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true">Selesai</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" class="text-center">Isi laporan</th>
                                <th scope="col" class="text-center">Aksi cepat</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>lorem ipsum</td>
                                <td>lorem ipsum</td>
                                <td class="text-center"><button type="button" class="btn btn-primary btn-sm">Lihat detail</button></td>
                                <td>
                                    <div class="text-center">
                                        
                                        <a type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <a type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>  
                                    </div>
                                    
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col" class="text-center">Detail dari laporan anda</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>lorem ipsum</td>
                                  <td>lorem ipsum</td>
                                  <td class="text-center">
                                    <p>Lihat detail dan proses dari laporan anda</p>
                                    <a type="button" class="btn btn-primary btn-sm">Klik disini</a>
                                  </td>
                                  
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Gambar</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Isi laporan</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>lorem ipsum</td>
                                  <td>lorem ipsum</td>
                                  <td><button type="button" class="btn btn-primary btn-sm">Lihat detail</button></td>
                                  
                                </tr>
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