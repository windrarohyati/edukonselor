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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="tes.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<header class="no-print">
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-lg-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/image/edukonselor.png" alt="Edukonselor" width="250" height="45"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link text-primary " aria-current="page" href="index.php">
                <i class="fa-solid fa-house"></i>
                Back to Home 
            </a>
            </li>
        </div>
      </div>
    </nav>
</header>
<body>
  <main id="content">
            <!-- container -->
    <div class="container mt-2 mb-2">
<!-- setting menu -->
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : "";
    $action = isset($_GET['action']) ? $_GET['action'] : "";

    if ($page==""){
            include "view-tes.php";
        }else{
            include "hasil-tes.php";
        }
?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3e5a166d9.js" crossorigin="anonymous"></script>
    <script>
        function generatePDF() {
          var element = document.getElementById('content');
            html2pdf(element, {
                margin:       0.5,
                filename:     'Rekomendasi-Jurusan-SMK2LPPMRI.pdf',
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            });
        }
        
    </script>
</div>