<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AV Rent Admin</title>
    <link rel="stylesheet" href="assets/css/homestyle.css">
    <link rel="shortcut icon" type="image/png" href="assets/AV B.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
  
  <body>
    
    <?php
    include("koneksi.php");
    session_start();
      if(!isset($_SESSION['username'])){
        
        header("Location:login.php ");
      }

    ?>

    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <label class="navbar-brand">
    <img src="assets/AV B.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
      AV Rent
    </label>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="?x=order">Order Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=orderk">Order Keluar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=mobil">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=cmobil">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?x=keluar">Keluar</a>
        </li>
      </ul>
      <span><h3 class="font-weight-bold">Welcome <?php echo $_SESSION['username'] ?></h3></span>
    </div>
  </div>
</nav>
        
        <div class="row mt-3">
          <div class="col-md-8 px-1 py-1">
            <?php include ("kontrol.php") ?>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <p class="text-center font-weight-bold">AV Rent &copy;<?php echo date('Y') ?></p>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>