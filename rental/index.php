<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AV Rent Homepage</title>
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <link rel="shortcut icon" type="image/png" href="assets/AV B.jpg">
    </head>

  <body>
    <?php 
      include("koneksi.php");
       
    ?>
      <div class="banner">
        <div class="navbar">
          <img src="assets/AV B.jpg" class="logo">
          <ul>
            <li><a href="login.php">ADMIN</a></li>
          </ul>
        </div>
        <div class="content">
          <h1>Selamat Datang Di AV Rent</h1>
          <br>
          <h4>Sewa Elit Bayar Sedikit</h4>
          <p>Call Center 08128612397</p>
          <div>
            <a href="#infom" id="btn_scroll"><button class="button" type="button"><span></span>Mobil</button></a>
          </div>
        </div>
      </div>
      <div id="infom" style="color: #808080;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Mobil Yang Tersedia</h3>
<br>
    
        <section class="menu-content">
            <br>
            <?php
            include("koneksi.php");
            $sql1 = "SELECT * FROM mobil WHERE s_mobil='tersedia'";
            $result1 = mysqli_query($koneksi,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $id_mobil = $row1["id_mobil"];
                    $merk = $row1["merk"];
                    $spek = $row1["spek"];
                    $seat = $row1["seat"];
                    $harga = $row1["harga"];
                    $gambar = $row1["foto_mobil"];
               
                    ?>
            
            <div class="sub-menu">
            <a href="orderpelanggan.php?id=<?php echo($id_mobil) ?>" style="text-decoration: none;">

            <img class="card-img-top" src="assets/gmobil/<?php echo $gambar ?>" alt="Card image cap">
            <br>
            <br>
            <h3 style="color: black;"><b> <?php echo $merk; ?> </b></h3>
            <h4 style="color: black;"> <?php echo $spek; ?> </h4>
            <h4 style="color: black;"> <?php echo $seat; ?> Seat</h4>
            <h3 style="color: black;"><?php echo ("Rp. " . number_format($harga) . "/Hari"); ?></h3>

            </a>
            </div> 
            
            <?php }}
            else {
                ?>
              <h1> Tidak Ada Mobil Yang Tersedia </h1>
                <?php
            }
               

            ?>
        </section>
                    
    </div>

    
    <div class="row mt-3">
          <div class="col-md-12">
            <p class="text-center font-weight-bold">AV Rent &copy;<?php echo date ('Y') ?></p>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

      </body>
</html>