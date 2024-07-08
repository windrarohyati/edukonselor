<!-- Proses login -->
<?php
session_start();
require "config.php";

if(isset($_POST["submit"])){

    //mengambil data dari form
    $username=$_POST["username"];
    $password=md5($_POST["password"]);

    //cek username password
    $sql = "SELECT*FROM users where username='$username' and password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        
        //membuat session
        $_SESSION['username'] = $row["username"];
        $_SESSION['role'] = $row["role"];
        $_SESSION['status'] = "y";
    
       header("Location:dashboard.php");

    } else {
        header("Location:?msg=n");
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin/Guru</title>
    <!-- style -->
    <style>
        body
        {
            padding-top:200px;
            padding-bottom:150px;
            padding-left:500px;
            padding-right:500px;
        }
        .card-body
        {
            background-color:#BCE1EC;
        }
        .card-title
        {
            text-align:center;
        }
        .group-style
        {
            padding:10px;
        }
    </style>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- validasi login gagal -->
<?php 
if(isset($_GET['msg'])){
    if($_GET['msg'] == "n"){
    ?>
    <div class="alert alert-danger" align="center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Login Gagal</strong>
    </div>
    <?php
    }       
}
?>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title fw-bold">EDUKONSELOR</h5>
    <div class="form-group group-style">
    <form method="POST">
        <i class="fa-solid fa-user"></i>
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" autocomplete="off" required>
    </div>
    <div class="form-group group-style">
        <i class="fa-solid fa-lock"></i>
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off" required>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto" style="padding-top:10px;">
        <input type="submit" class="btn btn-primary" name="submit" value="Login">
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3e5a166d9.js" crossorigin="anonymous"></script>
</body>
</html>