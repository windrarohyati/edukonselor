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
    <link rel="stylesheet" href="dashboard.css">
    
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

</head>

<body>
    <div class="sidebar col-md-3">
        <div class="sidebar-header">
            <a class="nav-link" href="dashboard.php">
                <img src="assets/image/edukonselor.png" width="200" height="35">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="nav-link" href="?page=data-hasil">
                    <i class="fa-solid fa-list-check" style="padding-right:15px;"></i>
                    Hasil Rekomendasi
                </a>
            </li>
            <!-- setting hak akses -->
            <?php 
                if($_SESSION['role']=="Guru"){
            ?>
            <li>
                <a class="nav-link" href="?page=kriteria">
                    <i class="fa-solid fa-address-book" style="padding-right:15px;"></i>
                    Kriteria jurusan
                </a>
            </li>
            <li>
                <a class="nav-link" href="?page=jurusan">
                    <i class="fa-solid fa-building-columns" style="padding-right:15px;"></i>
                    Jurusan
                </a>
            </li>
            <li>
                <a class="nav-link" href="?page=basis_rule">
                    <i class="fa-solid fa-pen-ruler" style="padding-right:15px;"></i>
                    Basis Rule
                </a>
            </li>
            <?php
                }elseif($_SESSION['role']=="Admin"||"Wakasek"){
            ?>
            <li>
                <a class="nav-link" href="?page=kriteria">
                    <i class="fa-solid fa-address-book" style="padding-right:15px;"></i>
                    Kriteria jurusan
                </a>
            </li>
            <li>
                <a class="nav-link" href="?page=jurusan">
                    <i class="fa-solid fa-building-columns" style="padding-right:15px;"></i>
                    Jurusan
                </a>
            </li>
            <li>
                <a class="nav-link" href="?page=basis_rule">
                    <i class="fa-solid fa-pen-ruler" style="padding-right:15px;"></i>
                    Basis Rule
                </a>
            </li>
            <li>
                <a class="nav-link" href="?page=users">
                    <i class="fa-solid fa-user" style="padding-right:15px;"></i>
                    Users
                </a>
            </li>
            <?php
                }
            ?>
            <li>
                <a href="?page=logout" class="nav-link" role="button">
                    <i class="fa-solid fa-right-from-bracket" style="padding-right:15px;"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
        <div class="col-sm-6 col-md-8" style="padding-top:70px;padding-left:15px;">
                <!-- cek status login -->
                <?php 
                if($_SESSION['status']!="y"){
                    header("Location:login.php");
                }
                ?>
                <!-- setting menu -->
                <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : "";
                    $action = isset($_GET['action']) ? $_GET['action'] : "";

                    if ($page==""){
                        include "welcome.php";
                    }elseif ($page=="kriteria"){
                        if ($action==""){
                            include "view-kriteria.php";
                        }elseif ($action=="tambah"){
                            include "add-kriteria.php";
                        }elseif ($action=="update"){
                            include "update-kriteria.php";
                        }else{
                            include "delete-kriteria.php";
                        }
                    }elseif ($page=="jurusan"){
                        if ($action==""){
                            include "view-jurusan.php";
                        }elseif ($action=="tambah"){
                            include "add-jurusan.php";
                        }elseif ($action=="update"){
                            include "update-jurusan.php";
                        }else{
                            include "delete-jurusan.php";
                        }
                    }elseif ($page=="basis_rule"){
                        if ($action==""){
                            include "view-basisrule.php";
                        }elseif ($action=="tambah"){
                            include "add-basisrule.php";
                        }elseif ($action=="detail"){
                            include "detail-basisrule.php";
                        }elseif ($action=="update"){
                            include "update-basisrule.php";
                        }elseif ($action=="delete_kriteria"){
                            include "delete-basisrule-kriteria.php";
                        }else{
                            include "delete-basisrule.php";
                        }
                    }elseif ($page=="tes"){
                        if ($action==""){
                            include "view-tes.php";
                        }else{
                            include "hasil-tes.php";
                        }
                    }elseif ($page=="data-hasil"){
                        if ($action==""){
                            include "view-datahasil.php";
                        }else{
                            include "detail_datahasil.php";
                        }
                    }elseif ($page=="users"){
                        if ($action==""){
                            include "view-users.php";
                        }elseif ($action=="tambah"){
                            include "add-users.php";
                        }elseif ($action=="update"){
                            include "update-users.php";
                        }else{
                            include "delete-users.php";
                        }
                    }else{
                        include "logout.php";
                    }
                ?>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3e5a166d9.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

</body>
</html>