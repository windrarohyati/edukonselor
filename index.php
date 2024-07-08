<?php
    session_start();
    //konseksi database
    include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukonselor - Sistem Rekomendasi Jurusan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
<body>
    <!-- navigasi bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-lg-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/image/edukonselor.png" alt="Edukonselor" width="250" height="45"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jurusan">Jurusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#daftar">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Narahubung</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <a href="dashboard.php" class="btn btn-outline-primary" role="button">Login</a>
          </form>
        </div>
      </div>
    </nav>
    <!-- header -->
    <section class="jumbotron jumbotron-fluid background-header">
        <div class="container-fluid text-left">
          <p class="lead">Welcome</p>
          <h1 class="text-setting fw-bold">SISTEM REKOMENDASI <br>JURUSAN SMK 2 LPPM-RI</h1>
          <p class="lead">Jurusan Terbaik Untuk Masa Depan Cerahmu!</P>
          <p><a href="tes.php" class="btn btn-outline-primary btn-lg" role="button">Tes Jurusanmu!</a></p>
        </div>
    </section>
    <!-- Jurusan -->
    <section id="jurusan" class="container service-style">
      <div class="row text-center">
        <div class="col-12 pb-2">
          <h2 class="display-4">Pilihan Jurusan di SMK 2 LPPM-RI</h2>
        </div>
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <span class="fa-stack fa-2x">
                    <img src="assets/image/DKV.jpg" width=60 height=60>
                  </span>
                  <h5 class="text-setting">Desain Komunikasi Visual</h5>
                  <p class="card-text">Desain Komunikasi Visual (DKV) adalah bidang studi yang berfokus pada penggunaan elemen visual untuk menyampaikan pesan atau informasi. Ini mencakup berbagai aspek seperti grafis, ilustrasi, tipografi. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <span class="fa-stack fa-2x">
                    <img src="assets/image/BCP.jpg" width=60 height=60>
                  </span>
                  <h5 class="text-setting">Broadcasting dan Perfilman</h5>
                  <p class="card-text">Jurusan Broadcasting/Perfilman di Sekolah Menengah Kejuruan (SMK) adalah program pendidikan yang dirancang untuk mempersiapkan siswa menjadi tenaga profesional di bidang penyiaran dan perfilman.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <span class="fa-stack fa-2x">
                    <img src="assets/image/mesin.jpg" width=60 height=60>
                  </span>           
                  <h5 class="text-setting">Teknik Mesin</h5>
                  <p class="card-text">Teknik Mesin adalah jurusan yang mempelajari berbagai aspek terkait perancangan, produksi, dan perawatan mesin.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <span class="fa-stack fa-2x">
                    <img src="assets/image/otomotif.jpg" width=60 height=60>
                  </span>            
                  <h5 class="text-setting">Teknik Otomotif</h5>
                  <p class="card-text">Jurusan Teknik Otomotif di SMK adalah program pendidikan yang dirancang untuk menghasilkan tenaga terampil di bidang perawatan dan perbaikan kendaraan bermotor. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- pendaftaran -->
    <section id="daftar" class="container">
      <div class="row text-center">
        <div class="col-12 pb-4">
          <h2 class="display-4 text-center mb-5">Informasi Pendaftaran</h2>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Waktu Pendaftaran
              </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul class="text-start">
                  <li>Gelombang 1: 10 Januari - 10 Maret 2024</li>
                  <li>Gelombang 2: 11 Maret - 11 Mei 2024</li>
                  <li>Gelombang 3: 12 Mei - 15 Juli 2024</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Persyaratan
              </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <ul class="text-start">
                  <li>Mengisi formulir pendaftaran</li>
                  <li>Lulus dan memiliki ijazah SMP/MTs</li>
                  <li>Berusia paling tinggi 20 tahun pada awal tahun pelajaran 2024-2025</li>
                  <li>Menyerahkan fotocopy Kartu Bantuan Pemerintah untuk mendapatkan bantuan pemerintah kembali sebanyak 2 lembar</li>
                  <li>Menyerahkan fotocopy sertifikat/piagam penghargaan prestasi yang telah diraih (Minimal Juara 1, 2, 3 tingkat kabupaten) sebanyak 2 lembar.</li>
                  <li>Calon siswa menyerahkan:
                    <ol class="list-group list-group-numbered">
                      <li class="list-group-item">Fotocopy Ijazah SMP/MTs 3 lembar</li>
                      <li class="list-group-item">Fotocopy akte kelahiran 3 lembar</li>
                      <li class="list-group-item">Pas foto ukuran 2x3 cm 3 lembar</li>
                      <li class="list-group-item">Pas foto ukuran 3x4 cm 3 lembar</li>
                      <li class="list-group-item">Fotocopy kartu keluarga 2 lembar</li>
                    </ol>
                  </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- kontak -->
    <section id="kontak" class="container-fluid text-center" style="background-color:#b4e8f8;margin-top: 50px;padding-top: 25px;">
        <h2 class="display-4 pb-4">Hubungi Kami Sekarang!</h2>
        <p class="lead pb-3">Kirim pesan untuk informasi lebih lanjut.</p>
        <a href="https://wa.me/6282240200278?text=Halo%20saya%20ingin%20mendapatkan%20informasi%20pendaftaran%20SMK 2 LPPM-RI%20
" class="btn btn-outline-success btn-lg mb-4"><i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
    </section>
    <footer class="bg-dark">
      <div class="col-lg-12" style="padding: 10px;">
        <div style="text-align: center;">
          <a href="#" class="text-light" style="padding: 5px;"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="text-light" style="padding: 5px;"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" class="text-light" style="padding: 5px;"><i class="fa-regular fa-envelope"></i></i></a>
        </div>
        <p class="text-center text-secondary">Copyright &copy Edukonselor 2024</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3e5a166d9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>