<?php
#1. membuat koneksi database dengan PHP
include("koneksi.php");

#2. mengambil semua value dari form dan dimasukkan ke masing-masing variabel
$nidn = $_POST['nidn'];
$nama_lengkap = $_POST['nama_lengkap'];
$rumpun = $_POST['rumpun'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];   
$email = $_POST['email'];

#3. menuliskan query simpan
$simpan = "INSERT INTO dosen (nidn, nama_lengkap, rumpun, tempat_lahir, tanggal_lahir, email) VALUES ('$nidn', '$nama_lengkap', '$rumpun', '$tempat_lahir', '$tanggal_lahir','$email')";

#4. menjalankan query
mysqli_query($koneksi, $simpan);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
   <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card-body">
                <table class="table">

                <tbody>
                    <tr>
                        <th scope="row">NIDN</th>
                        <th>: <?= $nidn ?> </th>
                    </tr>
                    <tr>
                        <th scope="row">Nama Lengkap</th>
                        <th>: <?= $nama_lengkap ?> </th>
                    </tr>
                    <tr>
                        <th scope="row">Rumpun</th>
                        <th>: <?= $rumpun ?> </th>
                    </tr>
                    <tr>
                        <th scope="row">Tempat Lahir</th>
                        <th>: <?= $tempat_lahir ?> </th>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal lahir</th>
                        <th>: <?= $tanggal_lahir ?> </th>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <th>: <?= $email ?> </th>
                    </tr>
                </tbody>

                </table>
                <a href="dosen.php" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            </div>
        </div>
   </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>