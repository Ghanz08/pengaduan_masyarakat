<?= $this->extend('Layout/Base'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="/kodingan/style.css">

<body>
  <div class="p-5 mb-4 bg-danger ">
    <div class="container-fluid py-5">
      <div class="row text-center text-light">
        <h2>Tentang kita</h2>
      </div>
      <div class="row mt-5">
        <div class="col text-light">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id.
            </p>
        </div>
        <div class="col text-light">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id.
            </p>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-shape-divider-top-1698647901">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
<div class="container mt-5">
 <!-- item 1 -->
    <div class="row d-flex flex-row">
      <div class="col-sm-6 ">
        <img style="width: 350px; height: 309.034px; flex-shrink: 0; margin-left: 200px; border-radius: 10px;" src="/kodingan/frontend/img/abt_img.png" alt="">
      </div>
      <div class="col-6 ">
        <div style="word-wrap: break-word;">
          <h3>Ini judul</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id. </p>
        </div>
      </div>
    </div>
<!-- item 2 -->
    <div class="row d-flex flex-row mt-5">
      <div class="col-sm-6 ">
        <div class="text-end" style="word-wrap: break-word;">
          <h3>Ini judul</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id. </p>
        </div>
      </div>
      <div class="col-6 ">
        <img style="width: 350px;
        height: 309.034px;
        flex-shrink: 0; border-radius: 10px;" src="/kodingan/frontend/img/abt_img.png" alt="">
      </div>
    </div>
  <!-- Item 3 -->
  <div class="row d-flex flex-row mt-5">
    <div class="col-sm-6 ">
      <img style="width: 350px; height: 309.034px; flex-shrink: 0; margin-left: 200px; border-radius: 10px;" src="/kodingan/frontend/img/abt_img.png" alt="">
    </div>
    <div class="col-6 ">
      <div style="word-wrap: break-word;">
        <h3>Ini judul</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id. </p>
      </div>
    </div>
  </div>
  <!-- Item 4 -->
  <div class="row d-flex flex-row mt-5">
    <div class="col-sm-6 ">
      <div class="text-end" style="word-wrap: break-word;">
        <h3>Ini judul</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et eros at velit sagittis convallis id id libero. Suspendisse sed ligula eu arcu sollicitudin congue eget non augue. Nulla tincidunt dapibus mi, a laoreet nulla pretium id. </p>
      </div>
    </div>
    <div class="col-1 ">
      <img style="width: 350px; height: 309.034px; flex-shrink: 0; border-radius: 10px;" src="/kodingan/frontend/img/abt_img.png" alt="">
    </div>
  </div>
  
 
</div>

</body>

</html>

<?= $this->endSection(); ?>