<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Custom CSS  -->
  <link rel="stylesheet" href="frontend/css/style.css">
  <nav class="navbar navbar-expand-sm navbar-danger bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand link-light" href="javascript:void(0)">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex" style="margin-right: 13%;" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link link-light" href="/masyarakat">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="javascript:void(0)">Panduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="javascript:void(0)">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-light" href="javascript:void(0)">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</head>

<?= $this->renderSection('content'); ?>